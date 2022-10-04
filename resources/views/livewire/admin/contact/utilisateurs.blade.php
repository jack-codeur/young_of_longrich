<div class="app-content pt-3 p-md-3 p-lg-4">
	<div class="container-xl">
		
		<div class="row g-3 mb-4 align-items-center justify-content-between">
			<div class="col-auto">
				<h1 class="app-page-title mb-0">
					<span class="nav-icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="" viewBox="0 0 16 16">
							<path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
						</svg>
					</span>
					Les utilisateurs
				</h1>
			</div>
			<div class="col-auto">
					<div class="page-utilities">
					<div class="row g-2 justify-content-start justify-content-md-end align-items-center">
						<div class="col-auto">
							<div class="app-search-box col">
							<form class="app-search-form">   
								<input type="text" placeholder="Search..." name="search" class="form-control search-input">
								<button type="submit" class="btn search-btn btn-primary" value="Search"><i class="fas fa-search"></i></button> 
							</form>
						</div>
						</div>
						<div class="col-auto">		
							 <!-- Button trigger modal -->
                            <button type="button" class="btn btn-color_add" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            Ajouter un utilisateur
                            </button>				    
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
		<nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">
			<a class="fs-4 text-secondary flex-sm-fill text-sm-center nav-link active" id="" data-bs-toggle="tab" href="#orders-all" role="tab" aria-controls="orders-all" aria-selected="true"></a>
		</nav>
		
		
		<div class="tab-content" id="orders-table-tab-content">
			<div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
				<div class="app-card app-card-orders-table shadow-sm mb-5">
					<div class="app-card-body">
						<div class="table-responsive">
							<table class="table app-table-hover mb-0 text-left">
								<thead style="background-color: rgb(59, 85, 202);">
									<tr>
										<th style="color: white;" class="cell">Sexe</th>
										<th style="color: white;" class="cell">Nom</th>
										<th style="color: white;" class="cell">Prenom</th>
										<th style="color: white;" class="cell">Téléphobe</th>
										<th style="color: white;" class="cell">E-mail</th>
										{{-- <th style="color: white;" class="cell">Statut</th> --}}
										<th style="color: white;" class="cell">Ville</th>
										<th style="color: white;" class="cell">Commune/Quartier</th>
										<th style="color: white;" class="cell">Actions</th>
									</tr>
								</thead>
								<tbody>

									@foreach ($users as $user)
										<tr>
										<td class="cell">{{$user->sexe}}</td>
										<td class="cell"><span class="truncate">{{$user->nom}}</span></td>
										<td class="cell"><span class="truncate">{{$user->prenom}}</span></td>
										<td class="cell"><span>{{$user->nmeroTel}}</span></td>
										<td class="cell"><span>{{$user->email}}</span></td>
										<td class="cell"><span>{{$user->ville}}</span></td>
										<td class="cell"><span>{{$user->communeOuQuartier}}</span></td>
										<td class="cell">
											<button class="btn-sm border-0">
												<a href="#">
													<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="" viewBox="0 0 16 16">
														<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
														<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
													</svg>
												</a>
											</button>
											<button class="btn-sm border-0">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="" viewBox="0 0 16 16">
                                                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                                    </svg>
                                                </a>
                                            </button>
											<button class="btn-sm border-0">
												<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="" viewBox="0 0 16 16">
													<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
													<path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
												</svg>
											</button>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>		
				</div>
				<div class="app-pagination">
                    <div class="pagination justify-content-center">
                        {{$users->links()}}
                    </div>
                </div>
			</div>
		</div>

		<!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Créer une utilisateur</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="app-card app-card-settings shadow-sm p-4">
                            <form class="settings-form">
                                <div class="app-card-body">
                                    <div class="row mb-3">
                                        <div class="mb-3 col-6">
                                            <label for="setting-input-1" class="form-label">Nom</label>
                                            <input type="text" class="form-control" id="setting-input-1" placeholder="Le nom" required>
                                        </div>
                                        <div class="mb-3 col-6">
                                            <label for="setting-input-1" class="form-label">Prenom</label>
                                            <input type="text" class="form-control" id="setting-input-1" placeholder="Le prenom" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="mb-3 col-6">
                                            <label for="setting-input-1" class="form-label">Ville</label>
                                            <input type="text" class="form-control" id="setting-input-3" placeholder="Ville d'habitation" required>
                                        </div>
                                        <div class="mb-3 col-6">
                                            <label for="setting-input-1" class="form-label">Commune ou quartier</label>
                                            <input type="text" class="form-control" id="setting-input-4" placeholder="Commune ou quartier d'habitation" required>
                                        </div>
                                    </div>
									<div class="row mb-3">
                                        <div class="mb-3 col-6">
                                            <label for="setting-input-1" class="form-label">Sexe</label>
                                            <select type="text" class="form-control" id="setting-input-1" required>
                                                <option value="">--Aucun--</option>
                                                <option value="H">Homme</option>
                                                <option value="F">Femme</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 col-6">
                                            <label for="setting-input-1" class="form-label">N° téléphone</label>
                                            <input type="text" class="form-control" id="setting-input-4" placeholder="Numéro de téléphone" required>
                                        </div>
                                    </div>
									<div class="row mb-3">
                                        <div class="mb-3 col-6">
                                            <label for="setting-input-1" class="form-label">E-Mail</label>
                                            <input type="email" class="form-control" id="setting-input-1" placeholder="E-mail" required>
                                        </div>
                                        <div class="mb-3 col-6">
                                        	<label for="setting-input-1" class="form-label">Mot de passe</label>
                                        	<input type="text" class="form-control" id="setting-input-4" placeholder="Mot de passe" required>
                                    	</div>
                                    </div>
                                    <div class="row mb-3 text-center">
                                        <div class="mb-3 col-12">
                                            <button type="submit" class="col-12 py-2 btn btn-color fs-6 text-uppercase">Valider</button>
                                        </div>
                                    </div>
                                </div><!--//app-card-body-->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
	</div>
</div>
