@extends('panel.index')




@section('content')



    <div class="card card-info" style="margin: 40px">
        <div class="card-header">
            <h3 class="card-title">Contact</h3>
        </div>
        <form class="form-horizontal" method="post" action="">
            @csrf
            <div class="card-body">
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Name & Family</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="name" placeholder="Name & Family" name="name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="number" class="col-sm-2 col-form-label">Number</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="number" placeholder="Number" name="number">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="subject" class="col-sm-2 col-form-label">Subject</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="subject" placeholder="Subject" name="subject">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="message" class="col-sm-2 col-form-label">Message</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" id="message" rows="5" placeholder="Message"
                                  name="message"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="select" class="col-sm-2 col-form-label">Condition</label>
                    <div class="col-sm-3">
                        <select class="form-control" id="select" name="select">
                            <option hidden>select</option>
                            <option>Order Website</option>
                            <option>Order Web Application</option>
                            <option>Hosting</option>
                            <option>Seo</option>
                            <option>Support</option>
                            <option>Logo</option>
                            <option>Advice</option>
                        </select>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-info">Submit</button>
            </div>
            <!-- /.card-footer -->
        </form>
    </div>




@endsection
