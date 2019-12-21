@if(session('success'))
    <script>
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: '{!! session('success') !!}',
            showConfirmButton: false,
            timer: 1500
        })
    </script>
@endif

@if($errors->any())
    @foreach($errors->all() as $error)
        <script>
            Swal.fire({
                icon: 'error',
                title: '<i class="far fa-frown-open"></i>',
                text: '{{ $error }}',
                footer: ''
            })
        </script>
    @endforeach

@endif

@if(session('delete'))
    <script>
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false
        })

        swalWithBootstrapButtons.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            reverseButtons: true
        }).then((result) => {
            if (result.value) {
                swalWithBootstrapButtons.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                )
            } else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire(
                    'Cancelled',
                    'Your imaginary file is safe :)',
                    'error'
                )
            }
        })

    </script>
@endif

