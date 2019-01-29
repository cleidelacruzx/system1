
        // loader of every page
        $(window).on('load', function(){
            $(".loader").hide();
        });


        $.fn.capitalize = function() {
            $.each(this, function() {
                this.value = this.value.replace(/\b[a-z]/gi, function($0) {
                    return $0.toUpperCase();
                });
            });
        }

        //usage
        $('#last_name,#first_name,#middle_name').keyup(function() {
            $(this).capitalize();
        }).capitalize();  


      $(document).ready(function(){

            //dropdown select
            $('.js-example-basic-single').select2();

            // to remove dropdown suggested comment in form input
            $('input').attr('autocomplete','off');
            
            // to prevent clicking outside of the modal
            $('.modal').modal({
                show: false,
                backdrop: 'static'
            })


            // Bootstrap toggle icon 
            $('.dropdown-toggle').dropdown();

             // datatables
             var dataSrc = [];
             var table = $('#example').DataTable({
                "scrollY"        : "500px",
                "scrollCollapse" : true,
                "responsive": true,
                'processing': true,
                'language': {
                    'processing': "<img src='/Gear-1s-95px.gif' />"
                },
                // this will show the table after it hide
                "fnPreDrawCallback":function(){
                    $("#example2").show();
                },
                "initComplete": function(){
                   var api = this.api();
                   // Populate a dataset for autocomplete functionality
                   // using data from first, second and third columns
                   api.cells('tr', [1, 2]).every(function(){
                      // Get cell data as plain text
                      var data = $('<div>').html(this.data()).text();           
                      if(dataSrc.indexOf(data) === -1){ dataSrc.push(data); }
                   });
                   // Sort dataset alphabetically
                   dataSrc.sort();
                   // Initialize Typeahead plug-in
                   $('.dataTables_filter input[type="search"]', api.table().container())
                      .typeahead({
                         source: dataSrc,
                         afterSelect: function(value){
                            api.search(value).draw();
                         }
                      }
                   );
                }
             }); 
             // datatables



            $('[data-toggle="tooltip"]').tooltip();


            }); <!-- end of document ready function -->

            // jquery-mask
            $('input[name="mobile_number"]').mask('0000-0000-000',{
              placeholder: "0917-XXXX-XXX",
              clearIfNotMatch: true
            });

            $('input[name="secondary_contact"]').mask('0000-0000-000',{
              placeholder: "0917-XXXX-XXX",
              clearIfNotMatch: true
            });