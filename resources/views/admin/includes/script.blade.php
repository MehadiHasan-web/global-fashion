<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

{{-- <script src="{{ asset('admin/js/jquery.js') }}"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script src="{{ asset('admin/js/tether.min.js') }}"></script>
<script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/vendor/unifyMenu/unifyMenu.js') }}"></script>
<script src="{{ asset('admin/vendor/onoffcanvas/onoffcanvas.js') }}"></script>
<script src="{{ asset('admin/js/moment.js') }}"></script>

<!-- Sparkline JS -->
<script src="{{ asset('admin/vendor/sparkline/sparkline-retina.js') }}"></script>
<script src="{{ asset('admin/vendor/sparkline/custom-sparkline.js') }}"></script>

<!-- Slimscroll JS -->
<script src="{{ asset('admin/vendor/slimscroll/slimscroll.min.js') }}"></script>
<script src="{{ asset('admin/vendor/slimscroll/custom-scrollbar.js') }}"></script>

<!-- Chartist JS -->
<script src="{{ asset('admin/vendor/chartist/js/chartist.min.js') }}"></script>
<script src="{{ asset('admin/vendor/chartist/js/chartist-tooltip.js') }}"></script>
<script src="{{ asset('admin/vendor/chartist/js/custom/custom-line-chart3.js') }}"></script>
<script src="{{ asset('admin/vendor/chartist/js/custom/custom-area-chart.js') }}"></script>
<script src="{{ asset('admin/vendor/chartist/js/custom/donut-chart2.js') }}"></script>
<script src="{{ asset('admin/vendor/chartist/js/custom/custom-line-chart4.js') }}"></script>
{{-- ajax  --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.2/axios.min.js"></script>
{{-- selector 2 --}}
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<!-- Common JS -->
<script src="{{ asset('admin/js/common.js') }}"></script>
@livewireScripts


<script>
    $(document).ready(function() {
        $('.delate-item-btn').on('click', function(e) {
            e.preventDefault();
            const deleteRoute = $(this).data('delate-route');


            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: "Deleted!",
                        text: "Your file has been deleted.",
                        icon: "success"
                    });

                    $.ajax({
                        url: deleteRoute,
                        type: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            Swal.fire({
                                icon: "success",
                                title: "Your work has been saved",
                                showConfirmButton: false,
                                timer: 1000
                            }).then(() => {
                                location.reload();
                            });
                        },
                        error: function(error) {
                            Swal.fire({
                                icon: "error",
                                title: "Error Processing",
                                text: "please try again"
                            })
                        }


                    })

                }
            })

        })
    })
</script>
<script>
    document.getElementById('category_id').addEventListener('change', function() {
        var categoryId = this.value;
        console.log(categoryId);

        // Make an AJAX request to get subcategories based on the selected category
        axios.get('get-subcategories/' + categoryId)
            .then(function(response) {
                var subcategories = response.data.subcategories;
                var subcategoryDropdown = document.getElementById('subcategory_id');

                // Clear existing options
                subcategoryDropdown.innerHTML = '';

                // Populate subcategory dropdown with new options
                subcategories.forEach(function(subcategory) {
                    var option = document.createElement('option');
                    option.value = subcategory.id;
                    option.text = subcategory.name;
                    subcategoryDropdown.add(option);
                });
            })
            .catch(function(error) {
                console.error('Error fetching subcategories:', error);
            });
    });
</script>

{{-- multipal select 2  --}}
<script>
    $(".js-example-tokenizer").select2({
        tags: true,
        tokenSeparators: [',', ' ']
    })
</script>
{{-- products thumb image  --}}
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {

            var reader = new FileReader();

            reader.onload = function(e) {
                $('.image-upload-wrap').hide();

                $('.file-upload-image').attr('src', e.target.result);
                $('.file-upload-content').show();

                $('.image-title').html(input.files[0].name);
            };

            reader.readAsDataURL(input.files[0]);

        } else {
            removeUpload();
        }
    }

    function removeUpload() {
        $('.file-upload-input').replaceWith($('.file-upload-input').clone());
        $('.file-upload-content').hide();
        $('.image-upload-wrap').show();
    }
    $('.image-upload-wrap').bind('dragover', function() {
        $('.image-upload-wrap').addClass('image-dropping');
    });
    $('.image-upload-wrap').bind('dragleave', function() {
        $('.image-upload-wrap').removeClass('image-dropping');
    });
</script>
{{-- product multipal image upload js  --}}
<script>
    jQuery(document).ready(function() {
        ImgUpload();
    });

    function ImgUpload() {
        var imgWrap = "";
        var imgArray = [];

        $('.upload__inputfile').each(function() {
            $(this).on('change', function(e) {
                imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap');
                var maxLength = $(this).attr('data-max_length');

                var files = e.target.files;
                var filesArr = Array.prototype.slice.call(files);
                var iterator = 0;
                filesArr.forEach(function(f, index) {

                    if (!f.type.match('image.*')) {
                        return;
                    }

                    if (imgArray.length > maxLength) {
                        return false
                    } else {
                        var len = 0;
                        for (var i = 0; i < imgArray.length; i++) {
                            if (imgArray[i] !== undefined) {
                                len++;
                            }
                        }
                        if (len > maxLength) {
                            return false;
                        } else {
                            imgArray.push(f);

                            var reader = new FileReader();
                            reader.onload = function(e) {
                                var html =
                                    "<div class='upload__img-box'><div style='background-image: url(" +
                                    e.target.result + ")' data-number='" + $(
                                        ".upload__img-close").length + "' data-file='" + f
                                    .name +
                                    "' class='img-bg'><div class='upload__img-close'></div></div></div>";
                                imgWrap.append(html);
                                iterator++;
                            }
                            reader.readAsDataURL(f);
                        }
                    }
                });
            });
        });

        $('body').on('click', ".upload__img-close", function(e) {
            var file = $(this).parent().data("file");
            for (var i = 0; i < imgArray.length; i++) {
                if (imgArray[i].name === file) {
                    imgArray.splice(i, 1);
                    break;
                }
            }
            $(this).parent().parent().remove();
        });
    }
</script>
