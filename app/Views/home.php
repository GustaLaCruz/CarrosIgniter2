
        <!-- inicio do corpo da pagina-->
       <!--Início Carrousel-->
        <div class="row mt-5">
            <div class="col-12">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <img class="slideFundo" src="<?php base_url()?>/img/fundoHome.jpg" alt="">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="<?php base_url();?>/img/granta.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="<?php base_url();?>/img/vesta.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="<?php base_url();?>/img/xray.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                </div>
            </div>
        </div>
        <!--fim Carrousel-->
        <!--Início Collapse do menu Escolha o seu veiculo-->
        <div class="col text-dark">
                    <div class="row mt-5">
                        <div class="botaoCollapse text-center">  
                            <p>
                                <button class="btn btn-outline-light" type="button" data-bs-toggle="collapse" data-bs-target="#grantaCollapse" aria-expanded="false" aria-controls="grantaCollapse">
                                    Granta
                                </button>
                                <button class="btn btn-outline-light" type="button" data-bs-toggle="collapse" data-bs-target="#vestaCollapse" aria-expanded="false" aria-controls="vestaCollapse">
                                    Vesta
                                </button>
                                <button class="btn btn-outline-light" type="button" data-bs-toggle="collapse" data-bs-target="#xrayCollapse" aria-expanded="false" aria-controls="xrayCollapse">
                                    Xray
                                </button>
                                <button class="btn btn-outline-light" type="button" data-bs-toggle="collapse" data-bs-target="#nivalCollapse" aria-expanded="false" aria-controls="nivalCollapse">
                                    Niva Legend
                                </button>
                                <button class="btn btn-outline-light" type="button" data-bs-toggle="collapse" data-bs-target="#nivatCollapse" aria-expanded="false" aria-controls="nivatCollapse">
                                    Niva Travel
                                </button>
                            </p>
                        </div>
                    </div>

                    <div class="row justify-content-start">
                        <div class="cardCollapse">
                            <table>
                                <tr>

                            <th>
                                <div class="col grantaHome">
                                    <div class="collapse" id="grantaCollapse">
                                        <div class="card card-body bg-outline-light" style="width: 299px;">
                                            <p>
                                                <h5>GRANTA SEDAN</h5><a href="granta">
                                                <img src="<?php base_url()?>/img/granta.png" alt=""></a>
                                                Por R$60.621,19
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </th>

                                <th>
                                    <div class="col vestaHome">
                                        <div class="collapse" id="vestaCollapse">
                                            <div class="card card-body bg-outline-light" style="width: 299px;">
                                                <p>
                                                    <h5>VESTA SEDAN</h5><a href="vesta">
                                                    <img src="<?php base_url()?>/img/vesta.png" alt=""></a>
                                                    Por R$100.268,72
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </th>

                            <th>
                                <div class="col xrayHome">
                                    <div class="collapse" id="xrayCollapse">
                                        <div class="card card-body bg-outline-light" style="width: 299px;">
                                            <p>
                                                <h5>XRAY</h5><a href="xray">
                                                <img src="<?php base_url()?>/img/xray.png" alt=""></a>
                                                Por R$98.928,11
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </th>

                            <th>
                                <div class="col nivalHome">
                                    <div class="collapse" id="nivalCollapse">
                                        <div class="card card-body bg-outline-light" style="width: 299px;">
                                            <p>
                                                <h5>NIVA LEGEND</h5><a href="nivaLegend">
                                                <img src="<?php base_url()?>/img/nival.png" alt=""></a>
                                                Por R$73.188,39
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </th>

                            <th>
                                <div class="col nivatHome">
                                    <div class="collapse" id="nivatCollapse">
                                        <div class="card card-body bg-outline-light" style="width: 299px;">
                                            <p>
                                                <h5>NIVA TRAVEL</h5><a href="nivaTravel">
                                                <img src="<?php base_url()?>/img/nivat.png" alt=""></a>
                                                Por R$95.353,15
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </th>

                                </tr>
                            </table>
                        </div>
                    </div>
        </div>
        <!--fim Collapse do menu Escolha o seu veiculo-->
        <!-- fim do corpo da pagina-->
       