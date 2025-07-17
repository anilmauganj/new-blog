$(document).ready(function() {
  //Fetch
   var categoryTable = $("#categoryTable").DataTable({
    "processing": true,
    "serverSide": true,
      order: [[0, 'desc']],
    "ajax": {
      "url": categoryListURL,
      "type": 'POST'
    },

    "columns": [{
        "data": 0,
        "title": "#"
      },
      {
        "data": 1,
        "title": "Name"
      },
      {
        "data": 2,
        "title": "Slug"
      },
      {
        "data": 3,
        "title": "Description"
      },
      {
        "data": 4,
        "title": "Added On"
      },

      {"data": 5,
        "title": "Action", orderable:false, searchable:false 
      }
    ]
  });


  $("#createBtn").on('click', function() {
      $('#modalTitle').text('Add Category');
      $("#submitBtn").text('Create Category');
  });

  $('#categoryTable').on('click', '.editBtn', function(e) {
     e.preventDefault();
      $('#modalTitle').text('Edit Category');
      $("#submitBtn").text('Update Category');
     $categoryId = $(this).data('id');
     $("#categoryId").val($categoryId);
     $('#categoryName').val($(this).data('name'));
     $('#categorySlug').val($(this).data('slug'));
     $('#categoryDesc').val($(this).data('description'));

      $("#categoryModal").modal('show');
  });


//Save or Update
  $("#categoryForm").on('submit', function(e) {
    e.preventDefault();
    
    //remove previous error
    $('.form-control').removeClass('is-invalid');
    $('.invalid-feedback').text('');

    let categoryId = $("#categoryId").val();
    let formData = $(this).serialize();

    let url = categoryId ? updateCategoryURL : saveCategoryURL;

    $.ajax({
      url: url,
      method: "POST",
      data: formData,
      dataType: 'json',
      success: function(response) {
        if (response.status === 'success') {
          $("#categoryForm")[0].reset();
          $('#categoryId').val('');
          let modal = bootstrap.Modal.getInstance(document.getElementById('categoryModal'));
          modal.hide();
          categoryTable.ajax.reload(null, false); //without reset pagination
          toastr.success(response.message);
          console.log(response);

        } else{  
          console.log(response);
          if(response.errors.name) {
            $('#categoryName').addClass('is-invalid');
             $('.error-name').text(response.errors.name);
          }

          if(response.errors.slug) {
            $('#categorySlug').addClass('is-invalid');
            $('.error-slug').text(response.errors.slug);
          }    
        }
      },

      error: function(xhr, status, error) {
       toastr.error("Something went wrong.");
       console.log(status);
       console.log(error);
       console.log(xhr.responseText);
      }
    });
  });

//delete
$("#categoryTable").on('click', '.deleteBtn', function() {
        const id = $(this).data('id');
        
        Swal.fire({
        title: 'Are you sure?',
        text: 'This action cannot be undone!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'Cancel'
      }).then((result) => {
            if(result.isConfirmed) {
                $.ajax({
            url: deleteCategoryURL.replace('/0', '/' + id),
            type: 'DELETE',
            success: function(response) {
              toastr.success(response.message);
              categoryTable.ajax.reload(null, false);
            },

            error: function(err) {
              toastr.success(err.message);
            }

          });
        }
        });
      
      
      });


});