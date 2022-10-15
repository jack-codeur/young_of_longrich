<!-- Modal -->
<div class="modal fade" id="modalAdd"  tabindex="-1" wire:ignore.self>
    <div class="modal-dialog">
        <div class="modal-content col-12">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Ajouter un produit</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <div class="app-card app-card-settings shadow-sm p-4">
                    <form role="form" wire:submit.prevent='createProduitSante()'>
                    @csrf
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="form-group flex-grow-1 mr-2">
                                    <label>Catégorie</label>
                                    <select type="text"  wire:model="id_typeArticle" class="form-control @error('id_typeArticle') is-invalid @enderror">
                                        <option value="">---Aucune---</option>
                                        @foreach ($categories as $categorie)
                                            <option value="{{$categorie->id}}">{{$categorie->nomTypeArticle}}</option>
                                        @endforeach
                                    </select>
                                    @error('id_typeArticle')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="form-group flex-grow-1">
                                    <label>Nom du pproduit</label>
                                    <input type="text" wire:model="nom_produit" class="form-control @error('nom_produit') is-invalid @enderror">
                                    @error('nom_produit')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label>La maladie</label>
                                <select type="text" wire:model="maladie" class="form-control @error('maladie') is-invalid @enderror">
                                    <option value="">---Aucune---</option>
                                    @foreach ($maladies as $maladie)
                                        <option value="{{$maladie->id}}">{{$maladie->nom}}</option>
                                    @endforeach
                                </select>
                                @error('maladie')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="row form-group card border-info mb-3 p-3" style="max-width: 100%;">
                                <label class="pb-5">Images <span>(quatre 04 images au minimum)</span></label>
                                <input type="file" wire:model="image_produit" multiple class="bg-warning mb-5 col-6 form-control @error('image_produit') is-invalid @enderror">
                                @error('image_produit.*')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                                <div class="col-6">
                                    @if ($image_produit)
                                        <div wire:loading wire:target="image_produit">Chargement...</div>
                                        <img src="{{ $image_produit->temporaryUrl() }}" width="150" height="150">
                                    @endif
                                </div>
                            </div>

                            <div class="d-flex">
                                <div class="form-group flex-grow-1 mr-2">
                                    <label>Prix réel</label>
                                    <input type="number" class="form-control" wire:model="prix_reel" class="form-control @error('prix_reel') is-invalid @enderror">
                                    @error('prix_reel')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="form-group flex-grow-1">
                                    <label>Prix promo</label>
                                    <input type="number" wire:model="prix_promo" class="form-control @error('prix_promo') is-invalid @enderror">
                                    @error('prix_promo')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Description</label>
                                <textarea type="text" wire:model="description_produit" row="4" class="form-control @error('description_produit') is-invalid @enderror" placeholder="Decrivez votre produit ..."></textarea>
                                @error('description_produit')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Mode utilisation</label>
                                <textarea type="text" wire:model="mode_utilisation" row="4" class="form-control @error('mode_utilisation') is-invalid @enderror" placeholder="Le mode d'utilisation ..."></textarea>
                                @error('mode_utilisation')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            
                        </div>

                        <div class="card-footer d-flex">
                            <button type="submit" class="btn btn-primary flex-grow-1">Enregistrer</button>
                            <button type="button" wire:click="closeModal" class="btn btn-danger flex-grow-1 ml-2">Fermer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

    window.addEventListener('showModal', event =>{
        $('#modalAdd').modal({
            "show": true,
            "backdrop": "static"
        });
    });
    window.addEventListener('closeModal', event =>{
        $('#modalAdd').modal('hide');
    });
</script>