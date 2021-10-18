<div class="container" style="margin:120px;">

    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
        <div class="shadow-lg border-dark  bg-light p-5 rounded-3 m-5">
            <h1 class="display-6">Enter Username</h1>

            <form action="<?=BASEURL;?>/user/join" method="post">
                <div class="mb-4">
                <label for="username" class="form-label"></label>
                <input type="text" class="form-control" id="username" name="username" placeholder="username goes here" required>
                </div>
                <div class="d-flex">
                    <a type="button" href="<?=BASEURL;?>/user" class="btn btn-danger">Nevermind</a>
                    <button type="submit" class="btn btn-success ms-2">Join</button>
                </div>
            </form>

        </div>
        </div>
    </div>

</div>