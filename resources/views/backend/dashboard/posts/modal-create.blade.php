<div class="modal fade" id="addTodoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">TAMBAH POST</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label for="name" class="control-label">Titleee</label>
                    <input type="text" class="form-control" id="title">
                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-title"></div>
                </div>


                <div class="form-group">
                    <label for="slug" class="form-label">Slug</label>
                    <input type="text" class="form-control" id="slug" name="slug" readonly required>
                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-slug"></div>
                </div>


                <div class="form-group">
                    <label for="image" class="form-label">
                        Post Image
                        <small><u>Recomended : 750X400</u></small>
                    </label>
                    <img id="preview-image-before-upload" class="img-preview img-fluid mb-3 col-sm-5 d-block" src=""
                        alt="">
                    <input id="image" class="form-control" type="file" name="image" accept="image/*"
                        onchange="previewImage()" required>
                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-image"></div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" class="close" data-dismiss="modal"
                    data-bs-dismiss="modal" aria-label="Close">TUTUP</button>
                <button type="button" class="btn btn-primary" id="store">SIMPAN</button>
            </div>
        </div>
    </div>
</div>

{{-- <script>
    $("#closeButton").click(function () {
    $('body').removeClass('modal-open');
    $('body').css('padding-right', '');
    $(".modal-backdrop").remove();
    $('#thank-you').hide();
});
        //button create post event
        $('body').on('click', '#btn-create-post', function () {
console.log('tess')
        //open modal
        $('#addTodoModal').modal('show');
    });

    //action create post
    $('#store').click(function(e) {
        e.preventDefault();

        //define variable
        let title   = $('#title').val();
        let slug = $('#slug').val();
        let category_id   = $('#category_id').val();
        let link = $('#link').val();
        let image = $('#image').change(function(){
        let reader = new FileReader();
        reader.onload = (e) => { 
        $('#preview-image-before-upload').attr('src', e.target.result); 
    }
        reader.readAsDataURL(this.files[0]); 
        let body = $('#body').val();
        let token   = $("meta[name='csrf-token']").attr("content");
        
        //ajax
        $.ajax({

            url: `/dashboard/posts`,
            type: "post",
            cache: false,
            data: {
                "title": title,
                "slug": slug,
                "category_id": category_id,
                "link": link,
                "image": image,
                "body": body,
                "_token": token
            },
            success:function(response){

                //show success message
                Swal.fire({
                    type: 'success',
                    icon: 'success',
                   
                    showConfirmButton: false,
                    timer: 3000
                });

                //data post
                let post = `
                    <tr id="index_${response.data.id}">
                        <td>${response.data.title}</td>
                        <td>${response.data.category_id}</td>
                        <td class="text-center">
                            <a href="javascript:void(0)" id="btn-edit-post" data-id="${response.data.id}" class="btn btn-primary btn-sm">EDIT</a>
                            <a href="javascript:void(0)" id="btn-delete-post" data-id="${response.data.id}" class="btn btn-danger btn-sm">DELETE</a>
                        </td>
                    </tr>
                `;
                
                //append to table
                $('#table-posts').prepend(post);
                
                //clear form
                $('#title').val('');
                $('#slug').val('');

                //close modal
                $('#modal-create').modal('hide');
                

            },
            error:function(error){
                console.log(error);
                if(error.responseJSON.title[0]) {

//show alert
$('#alert-title').removeClass('d-none');
$('#alert-title').addClass('d-block');

//add message to alert
$('#alert-title').html(error.responseJSON.title[0]);
} 

if(error.responseJSON.slug[0]) {

//show alert
$('#alert-slug').removeClass('d-none');
$('#alert-slug').addClass('d-block');

//add message to alert
$('#alert-slug').html(error.responseJSON.slug[0]);
}


if(error.responseJSON.image[0]) {

//show alert
$('#alert-image').removeClass('d-none');
$('#alert-image').addClass('d-block');

//add message to alert
$('#alert-image').html(error.responseJSON.image[0]);
} 
            }

        });

    });

</script> --}}


<script src="http://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('body_post');
	//CKEDITOR.replace('body_post1');
	
	$.fn.modal.Constructor.prototype.enforceFocus = function() {
        var $modalElement = this.$element;
        $(document).on('focusin.modal',function(e) {
                var $parent = $(e.target.parentNode);
                if ($modalElement[0] !== e.target
                                && !$modalElement.has(e.target).length
                                && $(e.target).parentsUntil('*[role="dialog"]').length === 0) {
                        $modalElement.focus();
                }
        });
};
</script>

<script>
    const title = document.querySelector("#title");
        const slug = document.querySelector("#slug");

        title.addEventListener("keyup", function() {
            let preslug = title.value;
            preslug = preslug.replace(/ /g,"-");
            slug.value = preslug.toLowerCase();
    });

    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault( )
    })

    function previewImage(){
        
        const imgPreview = document.querySelector('.img-preview')

        const blob = URL.createObjectURL(image.files[0]);
        imgPreview.src = blob;
    }
</script>