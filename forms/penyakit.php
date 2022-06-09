<!-- ======= Header ======= -->
<?php include 'widgets_header.php'; ?>
<!-- End Header -->

<!-- ======= Sidebar ======= -->
<?php include 'widgets_sidebar.php'; ?>
<!-- End Sidebar-->

<body>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>FORM INPUT PENYAKIT</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="data_penyakit.php">Data Penyakit</a></li>
                    <li class="breadcrumb-item active">Input Penyakit</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Input Penyakit</h5>

                            <!-- General Form Elements -->
                            <form action="api_inputpenyakits.php" method="POST">

                                <div class="col-12"></div>
                                <!-- <label class="form-label">Nama Pasien</label> -->
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingPenyakit" name="nm" placeholder="Masukkan Nama Penyakit" required>
                                    <label for="floatingPenyakit">Nama Penyakit</label>
                                </div>

                                <div class="col-sm-10 text-center">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                </div>

                            </form><!-- End General Form Elements -->

                        </div>
                    </div>

                </div>


                </form><!-- End General Form Elements -->

            </div>
            </div>

            </div>
            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php include 'widgets_footer.php'; ?>