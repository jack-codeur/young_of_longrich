<!-- Modal -->
<div class="modal fade" id="modalAdd"  tabindex="-1" wire:ignore.self>
    <div class="modal-dialog">
        <div class="modal-content col-12">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Ajouter un article</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <div class="app-card app-card-settings shadow-sm p-4">
                    <form role="form" wire:submit.prevent='createProduitSoins()'>
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
                                    <label>Model</label>
                                    <input type="text" wire:model="model_article" class="form-control @error('model_article') is-invalid @enderror">
                                    @error('model_article')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="row form-group card border-info mb-3 p-3" style="max-width: 100%;">
                                <label class="pb-5">Images <span>(quatre 04 images au minimum)</span></label>
                                <input type="file" wire:model="image_article" class="bg-warning mb-5 col-6 form-control @error('image_article') is-invalid @enderror">
                                @error('image_article.*')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                                <div class="col-6">
                                    @if ($image_article)
                                        <div wire:loading wire:target="image_article">Chargement...</div>
                                        <img src="{{ $image_article->temporaryUrl() }}" width="150" height="150">
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
                                <label>Caracteristique</label>
                                <textarea type="text" wire:model="caracteristique" row="4" class="form-control @error('caracteristique') is-invalid @enderror" placeholder="Caracteristiques ..."></textarea>
                                @error('caracteristique')
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