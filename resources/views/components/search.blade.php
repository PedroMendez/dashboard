<div class="modal modal-search fade-in" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
                <button onclick="document.getElementById('searchModal').classList.add('fade-out'); let timeout = window.setTimeout(cleaning, 700); function cleaning() { let search = document.getElementById('searchModal'); search.classList.toggle('show'); search.classList.toggle('fade-out'); clearTimeout(timeout); };" type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="tim-icons icon-simple-remove"></i>
                </button>
            </div>
        </div>
    </div>
</div>
