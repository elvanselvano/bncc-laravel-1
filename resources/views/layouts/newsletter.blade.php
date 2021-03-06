<section class="newsletter">
    <div class="container">
    <div class="row">
    <div class="col-sm-12">
        <div class="content">
            <h2>SUBSCRIBE TO BNCC NEWSLETTER</h2>
        <div class="input-group">
             <input type="email" class="form-control" placeholder="Enter your email">
             <span class="input-group-btn">
             <button class="btn" type="submit">
                <a href="{{ route("sendMail") }}">Subscribe Now</a>
            </button>
             </span>
              </div>
        </div>
    </div>
    </div>
    </div>
</section>

<style>
.newsletter {
    padding: 40px 0;
    background: #f2f2f2;
}

.newsletter .content {
    max-width: 650px;
    margin: 0 auto;
    text-align: center;
    position: relative;
    z-index: 2;
}

.newsletter .content h2 {
    color: #243c4f;
    margin-bottom: 40px; }
    .newsletter .content .form-control {
    height: 50px;
    border-color: #ffffff;
    border-radius:0;
}

.newsletter .content.form-control:focus {
    box-shadow: none;
    border: 2px solid #243c4f;
}

.newsletter .content .btn {
    min-height: 50px;
    border-radius:0;
    background: #243c4f;
    color: #fff;
    font-weight:600;
}
</style>
