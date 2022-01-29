<footer class="footer footer-black  footer-white ">
    <div class="container-fluid">
        <div class="row">
            <nav class="footer-nav">
                <ul>
                    <li><a href="https://streamzinu.com" target="_blank">DEVELOP By STREAMZINU</a>
                    </li>
                </ul>
            </nav>
            <div class="credits ml-auto">
                <span class="copyright">
                    © <script>
                    document.write(new Date().getFullYear())
                    </script>, Dibuat oleh Feisal Jauhari T untuk PI
                </span>
            </div>
        </div>
    </div>
</footer>
</div>
</div>

<?php if($this->session->flashdata("add")): ?>
<script>
Swal.fire(
    'Success!',
    'Data has been created!',
    'success'
)
</script>
<?php endif ?>

<?php if($this->session->flashdata('update')): ?>
<script>
Swal.fire(
    'Success!',
    'Data has been update!',
    'success'
)
</script>
<?php endif ?>

<!--   Core JS Files   -->
<script src="<?= base_url() ?>assets/js/core/jquery.min.js"></script>
<script src="<?= base_url() ?>assets/js/core/popper.min.js"></script>
<script src="<?= base_url() ?>assets/js/core/bootstrap.min.js"></script>
<script src="<?= base_url() ?>assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chart JS -->
<script src="<?= base_url() ?>assets/js/plugins/chartjs.min.js"></script>
<!--  Notifications Plugin    -->
<script src="<?= base_url() ?>assets/js/plugins/bootstrap-notify.js"></script>
<!-----------Rich Text script------------>
</body>

</html>