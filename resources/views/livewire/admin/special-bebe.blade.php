<div class="app-content p-md-3 p-lg-4 py-3">

    @include('livewire.admin.create_form.create_prdt_bebe')
    
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h6 class="m-0">Accueil</h6>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                        <li class="breadcrumb-item active">Produits bébé</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="row mx-4 pt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-blue d-flex align-items-center">
                    <h3 class="card-title flex-grow-1">Liste des produits de bébé</h3>
                    <div class="card-tools d-flex align-items-center">

                        <button class="btn text-white mr-4 d-block" wire:click="showAddprdtBebe" style="background-color: rgb(59, 85, 202);">Créer un produit</button>

                        <div class="input-group input-group-md" style="width: 250px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body table-responsive p-0" style="height: 300px;">
                    <table class="table table-head-fixed text-nowrap table-striped">
                        <thead>
                            <tr>
                                <th style="width:5%" class="text-center">N°produit</th>
                                <th style="width:25%" class="text-center">Catégorie</th>
                                <th style="width:25%" class="text-center">Nom du produit</th>
                                <th style="width:20%" class="text-center">Prix réel</th>
                                <th style="width:20%" class="text-center">Prix promo</th>
                                <th style="width:20%" class="text-center">Publié</th>
                                <th style="width:30%" class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($prduit_bebe as $bebe )
                            @if ($bebe->id_typeArticle == 4)
                                <tr>
                                    <td class="text-center">{{$bebe->id}}</td>
                                    <td class="text-center">{{$bebe->id_typeArticle}}</td>
                                    <td class="text-center">{{$bebe->nom_produit}}</td>
                                    <td class="text-center">{{$bebe->prix_reel}}</td>
                                    <td class="text-center">{{$bebe->prix_promo}}</td>
                                    <td class="text-center">{{$bebe->created_at}}</td>
                                    <td class="text-center">
                                        <button class="btn btn-primary"><i class="far fa-edit fa-1x"></i></button>
                                        <button class="btn btn-success" ><i class="far fa-trash-alt fa-1x"></i></button>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer flot-right">
                    <div class="float-right">
                        {{ $prduit_bebe->links() }}
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script>

        window.addEventListener("showConfirmMessage", event =>{
            
            Swal.fire({
                title: event.detail.message.title,
                text: event.detail.message.text,
                icon: event.detail.message.type,
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Confirmer',
                cancelButtonText: 'Annuler'
                }).then((result) => {
                if (result.isConfirmed) {
                    @this.deleteUser(event.detail.message.data.user_id);
                }
            });

            window.addEventListener("showSuccesMessage", event =>{
            
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                toast: true,
                title: event.detail.message,
                showConfirmButton: false,
                timer: 3000,
            })
        });

        });

    </script>
    
</div><!--//app-content-->