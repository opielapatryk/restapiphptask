<h4 class="card-title">Add new Person</h4>
            <p class="card-description">Enter person data</p>
        <form action="" method="post">
            {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="John Cena">
                      </div>
                      <div class="form-group">
                        <label for="phone">phone</label>
                        <input type="text" class="form-control" id="phone" placeholder="123234123">
                      </div>
                      <div class="form-group">
                        <label for="street">street</label>
                        <input type="text" class="form-control" id="street" placeholder="St. Julians">
                      </div>
                      <div class="form-group">
                        <label for="city">city</label>
                        <input type="text" class="form-control" id="city" placeholder="New York">
                      </div>
                      <div class="form-group">
                        <label for="country">country</label>
                        <input type="country" class="form-control" id="country" placeholder="Poland">
                      </div>
                      <div class="form-group">
                        <label for="email">email</label>
                        <input type="email" class="form-control" id="email" placeholder="johncena@gmail.com">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
        </div>
    </div>
</div>