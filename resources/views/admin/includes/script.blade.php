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

<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.2/axios.min.js"></script>

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
