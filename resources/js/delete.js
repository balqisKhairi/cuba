
<script>

 
        $(document).on("click", "#deletecerti",function(){
    Swal.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
  }).then((result) => {
    if (result.isConfirmed) {

        type:"DELETE",
        url: "/delete",
        success:function(dataResult){
      Swal.fire(
        'Deleted!',
        'Your file has been deleted.',
        'success'
      )
    };
    }
  });
} );
</script>
