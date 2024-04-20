document.addEventListener('DOMContentLoaded', function() {
    var inputElement = document.getElementById('men');
    
    if (inputElement) {
        inputElement.addEventListener('keypress', function(event) {
            if (event.key === 'Enter') {
                event.preventDefault();
                document.getElementById('searchForm').submit();
            }
        });
    }
});
