<div class="modal modal-search bounce-in-from-left" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
                <button onclick="document.getElementById('searchModal').classList.add('out-to-left'); let timeout = window.setTimeout(cleaning, 700); function cleaning() { let search = document.getElementById('searchModal'); search.classList.toggle('show'); search.classList.toggle('out-to-left'); clearTimeout(timeout); };" type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="tim-icons icon-simple-remove"></i>
                </button>
            </div>
        </div>
    </div>
</div>
