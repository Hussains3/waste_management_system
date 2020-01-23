<!doctype html>
<html lang="en">
  <head>
    <title>Log In</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
          <div class="row d-flex justify-content-center">
              <div class="col-lg-4 col-sm-12 my-5 card p-5 bg-primary">
                <span class="d-flex justify-content-center"><img src="{{ asset('images/logo.png') }}" class="" alt="" style=" width:100px;"></span>
                <span>
                    <h1 class="text-center text-white">বর্জ্য ব্যাবস্থাপনা</h1>
                </span>
                <span>
                    <h4 class="text-center text-white mb-5">প্রবেশ</h4>
                </span>
                <form action="">
                    @csrf
                    <div class="">
                        <div class="input-group mb-3">
                            {{Form::email('date', null,array('class' => 'form-control rounded-pill','placeholder'=>'ইমেইল', 'required'  ))}}
                            
        
                            @error('date')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="">
                        <div class="input-group mb-3">
                            {{Form::password('waste_type_id',array('class' => 'form-control rounded-pill fas fa-lock','placeholder'=>'পাসওয়ার্ড', 'required'  ))}}
                            

                            @error('waste_type_id')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <small ><a href="" class="text-white">পাসওয়ার্ড ভূলে গেছেন?</a></small>
                <div class="text-center">
            
                    {{Form::submit('প্রবেশ', ['class' => 'btn btn-light rounded-pill mt-5'])}}
                </div>
                {{ Form::close() }}
                

              </div>
          </div>
      </div>









    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>