

        <div class="breadcrumbs">
            <div class="col-dm">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">


            <div class="col-lg-6 col-md-6 col-sm-12">
                <?php
                if ($total_dm > 999) {
                    echo '<a href="'.base_url('/') .'admin/dm" class="card bg-danger">';
                }else if($total_dm > 699){
                    echo '<a href="'.base_url('/') .'admin/dm" class="card bg-warning">';
                }else if($total_dm > 99){
                    echo '<a href="'.base_url('/') .'admin/dm" class="card bg-success">';
                }else if($total_dm > 0){
                    echo '<a href="'.base_url('/') .'admin/dm" class="card bg-primary">';
                }else{
                    echo '<a href="'.base_url('/') .'admin/dm" class="card bg-dark">';
                }
                ?>
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="fa fa-user-o text-light border-light"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text text-light">FORMULIR PENDAFTARAN EMAIL MAHASISWA</div>
                                <div class="stat-digit count text-light"><?= $total_dm; ?></div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
                <?php
                if ($total_rm > 999) {
                    echo '<a href="'.base_url('/') .'admin/rm" class="card bg-danger">';
                }else if($total_rm > 699){
                    echo '<a href="'.base_url('/') .'admin/rm" class="card bg-warning">';
                }else if($total_rm > 99){
                    echo '<a href="'.base_url('/') .'admin/rm" class="card bg-success">';
                }else if($total_rm > 0){
                    echo '<a href="'.base_url('/') .'admin/rm" class="card bg-primary">';
                }else{
                    echo '<a href="'.base_url('/') .'admin/rm" class="card bg-dark">';
                }
                ?>
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="fa fa-user-o text-light border-light"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text text-light">FORMULIR RESET PASSWORD EMAIL MAHASISWA</div>
                                <div class="stat-digit count text-light"><?= $total_rm; ?></div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
                <?php
                if ($total_dd > 999) {
                    echo '<a href="'.base_url('/') .'admin/dd" class="card bg-danger">';
                }else if($total_dd > 699){
                    echo '<a href="'.base_url('/') .'admin/dd" class="card bg-warning">';
                }else if($total_dd > 99){
                    echo '<a href="'.base_url('/') .'admin/dd" class="card bg-success">';
                }else if($total_dd > 0){
                    echo '<a href="'.base_url('/') .'admin/dd" class="card bg-primary">';
                }else{
                    echo '<a href="'.base_url('/') .'admin/dd" class="card bg-dark">';
                }
                ?>
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="fa fa-graduation-cap text-light border-light"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text text-light">FORMULIR PENDAFTARAN EMAIL DOSEN</div>
                                <div class="stat-digit count text-light"><?= $total_dd; ?></div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
                <?php
                if ($total_rd > 999) {
                    echo '<a href="'.base_url('/') .'admin/rd" class="card bg-danger">';
                }else if($total_rd > 699){
                    echo '<a href="'.base_url('/') .'admin/rd" class="card bg-warning">';
                }else if($total_rd > 99){
                    echo '<a href="'.base_url('/') .'admin/rd" class="card bg-success">';
                }else if($total_rd > 0){
                    echo '<a href="'.base_url('/') .'admin/rd" class="card bg-primary">';
                }else{
                    echo '<a href="'.base_url('/') .'admin/rd" class="card bg-dark">';
                }
                ?>
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="fa fa-graduation-cap text-light border-light"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text text-light">FORMULIR RESET PASSWORD EMAIL DOSEN</div>
                                <div class="stat-digit count text-light"><?= $total_rd; ?></div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
                <?php
                if ($total_dl > 999) {
                    echo '<a href="'.base_url('/') .'admin/dl" class="card bg-danger">';
                }else if($total_dl > 699){
                    echo '<a href="'.base_url('/') .'admin/dl" class="card bg-warning">';
                }else if($total_dl > 99){
                    echo '<a href="'.base_url('/') .'admin/dl" class="card bg-success">';
                }else if($total_dl > 0){
                    echo '<a href="'.base_url('/') .'admin/dl" class="card bg-primary">';
                }else{
                    echo '<a href="'.base_url('/') .'admin/dl" class="card bg-dark">';
                }
                ?>
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="fa fa-university text-light border-light"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text text-light ">FORMULIR PENDAFTARAN EMAIL LEMBAGA</div>
                                <div class="stat-digit count text-light "><?= $total_dl; ?></div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
                <?php
                if ($total_rl > 999) {
                    echo '<a href="'.base_url('/') .'admin/rl" class="card bg-danger">';
                }else if($total_rl > 699){
                    echo '<a href="'.base_url('/') .'admin/rl" class="card bg-warning">';
                }else if($total_rl > 99){
                    echo '<a href="'.base_url('/') .'admin/rl" class="card bg-success">';
                }else if($total_rl > 0){
                    echo '<a href="'.base_url('/') .'admin/rl" class="card bg-primary">';
                }else{
                    echo '<a href="'.base_url('/') .'admin/rl" class="card bg-dark">';
                }
                ?>
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="fa fa-university text-light border-light"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text text-light ">FORMULIR RESET PASSWORD EMAIL LEMBAGA</div>
                                <div class="stat-digit count text-light "><?= $total_rl; ?></div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
                <?php
                if ($total_gs > 999) {
                    echo '<a href="'.base_url('/') .'admin/gs" class="card bg-danger">';
                }else if($total_gs > 699){
                    echo '<a href="'.base_url('/') .'admin/gs" class="card bg-warning">';
                }else if($total_gs > 99){
                    echo '<a href="'.base_url('/') .'admin/gs" class="card bg-success">';
                }else if($total_gs > 0){
                    echo '<a href="'.base_url('/') .'admin/gs" class="card bg-primary">';
                }else{
                    echo '<a href="'.base_url('/') .'admin/gs" class="card bg-dark">';
                }
                ?>
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="fa fa-server text-light border-light"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text text-light ">FORMULIR PERGANTIAN SERVER DATA CENTER</div>
                                <div class="stat-digit count text-light "><?= $total_gs; ?></div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
                <?php
                if ($total_dc > 999) {
                    echo '<a href="'.base_url('/') .'admin/dc" class="card bg-danger">';
                }else if($total_dc > 699){
                    echo '<a href="'.base_url('/') .'admin/dc" class="card bg-warning">';
                }else if($total_dc > 99){
                    echo '<a href="'.base_url('/') .'admin/dc" class="card bg-success">';
                }else if($total_dc > 0){
                    echo '<a href="'.base_url('/') .'admin/dc" class="card bg-primary">';
                }else{
                    echo '<a href="'.base_url('/') .'admin/dc" class="card bg-dark">';
                }
                ?>
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="fa fa-server text-light border-light"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text text-light ">FORMULIR KUNJUNGAN DATA CENTER</div>
                                <div class="stat-digit count text-light "><?= $total_dc; ?></div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
                <?php
                if ($total_k > 999) {
                    echo '<a href="'.base_url('/') .'admin/k" class="card bg-danger">';
                }else if($total_k > 699){
                    echo '<a href="'.base_url('/') .'admin/k" class="card bg-warning">';
                }else if($total_k > 99){
                    echo '<a href="'.base_url('/') .'admin/k" class="card bg-success">';
                }else if($total_k > 0){
                    echo '<a href="'.base_url('/') .'admin/k" class="card bg-primary">';
                }else{
                    echo '<a href="'.base_url('/') .'admin/k" class="card bg-dark">';
                }
                ?>
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-archive text-light border-light"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text text-light">FORMULIR KELUHAN</div>
                                <div class="stat-digit count text-light"><?= $total_k; ?></div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
                <?php
                if ($total_jb > 999) {
                    echo '<a href="'.base_url('/') .'admin/jb" class="card bg-danger">';
                }else if($total_jb > 699){
                    echo '<a href="'.base_url('/') .'admin/jb" class="card bg-warning">';
                }else if($total_jb > 99){
                    echo '<a href="'.base_url('/') .'admin/jb" class="card bg-success">';
                }else if($total_jb > 0){
                    echo '<a href="'.base_url('/') .'admin/jb" class="card bg-primary">';
                }else{
                    echo '<a href="'.base_url('/') .'admin/jb" class="card bg-dark">';
                }
                ?>
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="fa fa-laptop text-light border-light"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text text-light ">FORMULIR PEMASANGAN JARINGAN BARU</div>
                                <div class="stat-digit count text-light "><?= $total_jb; ?></div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

        </div>

        <!-- <script type="text/javascript">
                function autoRefreshPage()
                {
                    window.location = window.location.href;
                }
                setInterval('autoRefreshPage()', 60000);
        </script> -->