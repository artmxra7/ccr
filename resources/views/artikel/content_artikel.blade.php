<div class="container  mg-b-40" style="margin-top:130px" >
    <div class="row">
        <div class="col-md-8 container-100" >

            <div class="complaint-list">
                <div class="infinite-container">
                    <div class="infinite-item">

                        @include('artikel.item');

                    </div>


                </div>
            </div>
        </div>

        <div class="col-md-4 container-100">



            <div class="panel panel-secondary panel-recomended">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h1>Artikel Rekomendasi</h1>
                    </div>
                </div>
                <div class="panel-body">
                    <ul class="list-unstyled list-instansi">
                        <li>
                            <img src="https://cdn.iconscout.com/icon/premium/png-256-thumb/government-office-13-1101740.png"
                                class="img-responsive img-rounded">
                            <div class="info">
                                <a href="{{ route('artikel.bumn') }}">BUMN</a>

                            </div>
                        </li>
                        <li>
                            <img src="https://upload.wikimedia.org/wikipedia/commons/e/e8/Education%2C_Studying%2C_University%2C_Alumni_-_icon.png"
                                class="img-responsive img-rounded">
                            <div class="info">
                                <a href="{{ route('artikel.kampus') }}">Kampus</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>


            {{--  <div class="panel panel-secondary mg-b-20">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4>STATISTIK LAPORAN</h4>
                    </div>
                </div>

                <div class="panel-body">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo quos nostrum esse iure, accusantium quae aut similique vitae doloremque, debitis laboriosam adipisci nihil, qui. Quisquam maxime obcaecati aperiam, eaque nam.
                    </p>
                </div>
            </div>

            <!-- <div class="panel panel-secondary">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4>STATISTIK INSTANSI</h4>
                    </div>
                </div>

                <div class="panel-body">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo quos nostrum esse iure, accusantium quae aut similique vitae doloremque, debitis laboriosam adipisci nihil, qui. Quisquam maxime obcaecati aperiam, eaque nam.
                    </p>
                </div>
            </div> -->  --}}
        </div>
    </div>
    <div class="text-center infinite-pagination" style="display: none;">
        <a href="https://www.lapor.go.id/laporan?page=2">Load More</a>
    </div>
</div>
