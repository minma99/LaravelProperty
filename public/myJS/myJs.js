function convertDateToPersian(yourDate){
    var dateFormat = new Intl.DateTimeFormat("fa",{year:"numeric",month:"2-digit",day:"2-digit"});
    yourDate=Date.parse(yourDate);
    return dateFormat.format(yourDate)
}
function convertDateToPersianDetails(yourDate){
    var dateFormat = new Intl.DateTimeFormat("fa",{year:"numeric",month:"2-digit",day:"2-digit", hour:"2-digit", minute:"2-digit", second:"2-digit"});
    yourDate=Date.parse(yourDate);
    return dateFormat.format(yourDate)
}

function closeAllModals() {
    var modals = document.querySelectorAll('.modal');
    modals.forEach(function(modal) {
    // Assuming you're using Bootstrap modals
    $(modal).modal('hide');
    });
    }
// the below function reduce number of line code in blade page to make dataTable
function makeDataTableByID(TableID){
        var table = $('#' + TableID).DataTable();
        // Add a search input to each footer cell
            $('#' + TableID + ' tfoot th').each(function () {
            var title = $(this).text();
            if (title !== 'Operations') {
                $(this).html('<input type="text" placeholder="' + title + '" />');
            }
        });
        
        // Apply the search
        table.columns().every(function () {
            var that = this;
            $('input', this.footer()).on('keyup change', function () {
                if (that.search() !== this.value) {
                    that.search(this.value).draw();
                }
            });
        });
}