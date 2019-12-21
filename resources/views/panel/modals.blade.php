<div class="modal fade" id="k{{ $contact->contact_id }}" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ $contact->contact_name }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <label style="color: black"> ID :</label> {{ $contact->contact_id }} <br>
                <label style="color: black"> Email :</label> {{ $contact->contact_email }} <br>
                <label style="color: black"> Number :</label> {{ $contact->contact_number }} <br>
                <label style="color: black"> Subject :</label> {{ $contact->contact_subject }} <br>
                <label style="color: black"> Condition :</label> {{ $contact->contact_condition }}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>






