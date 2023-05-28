<nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Report</a></li>
        <li class="breadcrumb-item active" aria-current="page">Attendance Report</li>
    </ol>
</nav>

<div class="row">

    <div class="col-6">

    </div>
    <div class="col-6">
        <div class="row justify-content-around align-items-center">
            <div class="col-3">
                <label for="report-time">Time</label>
                <select class="form-select" id="report-time" name="report-time"  >
                    <!-- <option value="" selected hidden></option> -->
                    <option value="">AM & PM</option>
                    <option value="AM">AM</option>
                    <option value="PM">PM</option>
                </select>
            </div>

            <div class="col-4">
                <label for="flatpickr-range"  class="form-label">Date <sup style="color:red;">*</sup></label>
                <input class="form-control flatpickr" type="text" placeholder="Select Dates.." id="report-range" name="flatpickr-range" required>
            </div>

            <div class="col-5 " style="width:40%;">
                <label class="form-label">Event Name</label>
                <div id="the-basics"  >
                    <input id="event-name" class="typeahead" type="text" placeholder="Enter Church Event">
                </div>
            </div>

        </div>


        <div class="row justify-content-around align-items-center p-3"> 


            <div class="col-2 form-group pt-1 ">
                <label for="check-adult" class="form-label pt-3">ADULT</label>
                 <input type="checkbox" style="height: 3em;width:3em;" class= "form-check-input" id="check-adult" name="check-adult" value="1" />
            </div>

            <div class="col-2 form-group pt-1"> 
                <label for="check-hype" class="form-label pt-3">HYPE</label>
                 <input type="checkbox" style="height: 3em;width:3em;" class= "form-check-input" id="check-hype" name="check-hype" value="1" />
            </div>

            <div class="col-2 form-group pt-1">
                <label for="check-jkids" class="form-label pt-3">JKIDS</label>
                 <input type="checkbox" style="height: 3em;width:3em;" class= "form-check-input" id="check-jkids" name="check-jkids" value="1" />
            </div>

            <div class="col-2 form-group pt-1">
                <label for="check-kaya" class="form-label pt-3">KAYA</label>
                 <input type="checkbox" style="height: 3em;width:3em;" class= "form-check-input" id="check-kaya" name="check-kaya" value="1" />
            </div>
        </div>


        
    </div>
</div>

<div class="border border-7   report_preview " id="tt">

   
</div>
<div class="pb-3">

</div>

<button type="button" class="btn btn-primary btn-rounded px-4 " style="margin-left:1500px;" id="btn-print-attendance" onclick="print();"><i class="fa fa-save"></i>&nbsp;&nbsp;PRINT</button>