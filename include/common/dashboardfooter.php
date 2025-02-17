<script>
    //fetching current page name
    const urlPathname = window.location.pathname.split('/');
    const currentPage = urlPathname[urlPathname.length - 1] != 'template' ? urlPathname[urlPathname.length - 1] : 'null';
    localStorage.setItem('currentPage', currentPage);
</script>

<!-- Required jQuery first, then Bootstrap Bundle JS -->
<script src="jsd/jquery.min.js"></script>
<script src="jsd/bootstrap.bundle.min.js"></script>
<script src="jsd/moment.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.0/xlsx.full.min.js"></script>


<!-- Slimscroll JS -->
<script src="vendor/slimscroll/slimscroll.min.js"></script>
<script src="vendor/slimscroll/custom-scrollbar.js"></script>

<script src="jsd/main.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>


<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.7/dist/sweetalert2.all.min.js"></script>

<script type="text/javascript" src="jsd/datatables.min.js"></script>
<script type="text/javascript" language="javascript"></script>

<!-- Slimscroll JS -->
<script src="vendor/slimscroll/slimscroll.min.js"></script>
<script src="vendor/slimscroll/custom-scrollbar.js"></script>

<script type="module" src="js/tester.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        setTimeout(() => {
            $('table.dtable').DataTable({
                'processing': true,
                'iDisplayLength': 10,
                "lengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                ],
                "createdRow": function(row, data, dataIndex) {
                    $(row).find('td:first').html(dataIndex + 1);
                },
                "drawCallback": function(settings) {
                    this.api().column(0).nodes().each(function(cell, i) {
                        cell.innerHTML = i + 1;
                    });
                },
                dom: 'lBfrtip',
                buttons: [{
                        extend: 'excel',
                    },
                    {
                        extend: 'colvis',
                        collectionLayout: 'fixed four-column',
                    }
                ],
            }); // this will initialize all tables with dtable class in project as DataTable
        }, 500);
    });
</script>