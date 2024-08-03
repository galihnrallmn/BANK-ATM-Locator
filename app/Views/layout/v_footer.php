<!-- Footer -->
<footer>
    <div class="footer-bottom bg-secondary">
        <div class="container border-top  py-4 border-primary">
            <div class="row">
                <div class="col-md-12 text-center text-white">
                    <p class="mb-0">©
                        <script>
                            document.write(new Date().getFullYear())
                        </script> Muhamad Galih Noor Allamin, Ujian Praktikum Sistem Informasi Geografis.
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Library Bundle Script -->
<script src="<?= base_url('hopeui') ?>/assets/js/core/libs.min.js"></script>

<!-- External Library Bundle Script -->
<script src="<?= base_url('hopeui') ?>/assets/js/core/external.min.js"></script>

<!-- Widgetchart Script -->
<script src="<?= base_url('hopeui') ?>/assets/js/charts/widgetcharts.js"></script>

<!-- mapchart Script -->
<script src="<?= base_url('hopeui') ?>/assets/js/charts/vectore-chart.js"></script>
<script src="<?= base_url('hopeui') ?>/assets/js/charts/dashboard.js"></script>

<!-- fslightbox Script -->
<script src="<?= base_url('hopeui') ?>/assets/js/plugins/fslightbox.js"></script>

<!-- Settings Script -->
<script src="<?= base_url('hopeui') ?>/assets/js/plugins/setting.js"></script>

<!-- Slider-tab Script -->
<script src="<?= base_url('hopeui') ?>/assets/js/plugins/slider-tabs.js"></script>

<!-- Form Wizard Script -->
<script src="<?= base_url('hopeui') ?>/assets/js/plugins/form-wizard.js"></script>

<!-- AOS Animation Plugin-->

<!-- App Script -->
<script src="<?= base_url('hopeui') ?>/assets/js/hope-ui.js" defer></script>


<!-- SwiperSlider Script -->
<script src="<?= base_url('hopeui') ?>/assets/vendor/swiperSlider/swiper-bundle.min.js"></script>
<script src="<?= base_url('hopeui') ?>/landing-pages/assets/js/app-landing.js" defer></script>
<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
        $('#datatable').DataTable();
    });

    <?php if (session()->getFlashdata('error')) : ?>
        var addModal = new bootstrap.Modal(document.getElementById('addModal'), {
            keyboard: false
        });
        addModal.show();
    <?php endif; ?>
</script>

</body>

</html>