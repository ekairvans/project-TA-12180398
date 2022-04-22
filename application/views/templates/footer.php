<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website <?= date('Y') ?></span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Anda Yakin Ingin Logout?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Pilih "Logout" Jika Anda Ingin Logout.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?= base_url('login/logout'); ?>">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

<!-- Page level plugins -->
<script src="<?= base_url('assets/vendor/datatables/jquery.dataTables.min.js'); ?>"></script>
<script src="<?= base_url('assets/vendor/datatables/dataTables.bootstrap4.min.js'); ?>"></script>

<!-- Page level custom scripts -->
<script src="<?= base_url('assets/js/demo/datatables-demo.js'); ?>"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/js/sb-admin-2.min.js'); ?>"></script>
<script>
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });

    $('.form-check-input').on('click', function() {
        const menuId = $(this).data('menu');
        const roleId = $(this).data('role');

        $.ajax({
            url: "<?= base_url('admin/changeaccess') ?>",
            type: 'post',
            data: {
                menuId: menuId,
                roleId: roleId
            },
            success: function() {
                document.location.href = "<?= base_url('admin/roleaccess/'); ?>" + roleId;
            }
        });
    });
</script>

<!-- chat -->

<script type="text/javascript">
    $("#frm-chat").submit(function(event) {
        event.preventDefault(); //prevent default action 
        var post_url = $(this).attr("action"); //get form action url
        var request_method = $(this).attr("method"); //get form GET/POST method
        var form_data = $(this).serialize(); //Encode form elements for submission

        $.ajax({
            url: post_url,
            type: request_method,
            data: form_data,
            success: function(response) {
                document.getElementById('chat-text').value = ''
                get_msg()
                window.location.href = "#endchat";
            }
        })
    });

    function setscroll() {

        window.location.href = "#endchat";

    }

    $(document).ready(function() {
        get_msg();
        setInterval(function() {
            get_msg()
        }, 1000);
    });

    function get_msg() {
        var user_id = "<?= $user['id'] ?>";
        $.ajax({
            type: 'GET',
            url: '<?= base_url() ?> pengajar/get_chat_forum/ <?= $this->uri->segment(3); ?> ',
            dataType: 'json',
            success: function(response) {
                let data = '';
                $.each(response, function(i, row) {
                    if (row['id_user'] == user_id) {
                        data += '<div class="d-flex justify-content-end mb-4">'
                    } else {
                        data += '<div class="d-flex justify-content-start mb-4">'
                    }

                    if (row['id_user'] == user_id) {} else {
                        data += '<div class="img_cont_msg" style="height: 40px; width: 40px;">'
                        data += '<img src="<?= base_url(); ?>assets/img/profile/' + row['image'] + '" class="rounded-circle user_img_msg">'
                        data += '</div>'
                    }

                    if (row['id_user'] == user_id) {
                        data += '<div class="msg_cotainer_send">'
                    } else {
                        data += '<div class="msg_cotainer">'
                        data += '<b style="color:#fff;">' + row['name'] + '</b><br>';
                    }

                    data += row['pesan'];

                    if (row['id_user'] == user_id) {
                        data += '<span class="msg_time_send">8:40 AM</span>'
                    } else {
                        data += '<span class="msg_time">8:40 AM</span>'
                    }

                    data += '</div>'
                    data += '</div>'
                    // console.log(row['name'])
                });

                data += '<div id="endchat"></div>'
                $('#msg').html(data);
            }
        });
    }
</script>


</body>

</html>