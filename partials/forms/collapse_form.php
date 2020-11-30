<div class="collapse" id="collapseForm">
  <div class="container main_nav_form" style="background-color:white;">
    <div class="card card-body" style="border:none;">
      <form id="regForm" action="">

        <h2>Get A Solar Quote</h2>

        <div class="tab">
          <div class="form-group">
            <input type="text" name="firstname" placeholder="Name" class="form-control form-control-lg">
          </div>
        </div>

        <div class="tab">
          <div class="form-group">
            <input type="text" name="phone" placeholder="Phone"  class="form-control form-control-lg">
          </div>
        </div>

        <div class="tab">
          <div class="form-group">
            <input type="email" name="email" placeholder="Email"  class="form-control form-control-lg">
          </div>
        </div>

        <div class="tab">
          <div class="form-group">
            <input type="text" name="zip" placeholder="Zip"  class="form-control form-control-lg">
          </div>
        </div>

        <div style="overflow:auto;">
          <div style="float:right;">
            <button type="button" id="prevBtn" onclick="nextPrev(-1)" class="btn btn-secondary"><i class="fas fa-arrow-circle-left"></i> Previous</button>
            <button type="button" id="nextBtn" onclick="nextPrev(1)" class="btn btn-orange"><i class="fas fa-arrow-circle-right"></i> Next</button>
          </div>
        </div>

        <!-- Circles which indicates the steps of the form: -->
        <div style="text-align:center;margin-top:40px;">
          <span class="step"></span>
          <span class="step"></span>
          <span class="step"></span>
          <span class="step"></span>
        </div>

      </form>
    </div>
  </div>
</div>