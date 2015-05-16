<script type="application/javascript">
  // JavaScript Document
var LoanAmtId = 'txt_TotalLoanAmount';
        var ROI_Id = 'txt_RateOfInterest';
        var TenorId = 'txt_Tendor';
        var EMIrateId = 'txtEMI';

function isNumberKey(evt) {
	if (document.getElementById(LoanAmtId).value != "") {
//                if (undefined != typeof (event)) {
			var charCode = (evt.which) ? evt.which : event.keyCode;
			if (charCode > 31 && (charCode < 45 || charCode > 57))
				return false;

			return true;
		//}

	}
}
function ResetAll() {
	document.getElementById(LoanAmtId).value = "";
	document.getElementById(ROI_Id).value = 8.25;
	document.getElementById(TenorId).value = 20;
	document.getElementById(EMIrateId).value = "";
}
function CalculateEMILoan() {
	//            var LoanAmt = document.getElementById(LoanAmtId).value;
	//            var ROI = document.getElementById(ROI_Id).value;
	//            var Tenor = document.getElementById(TenorId).value * 12;
	var a = document.getElementById(LoanAmtId).value;
	var b = document.getElementById(ROI_Id).value;
	var c = document.getElementById(TenorId).value;
	var n = c * 12;
	var r = b / (12 * 100);
	var p = (a * r * Math.pow((1 + r), n)) / (Math.pow((1 + r), n) - 1);
	var prin = Math.round(p * 100) / 100;
	document.getElementById(EMIrateId).value = prin;

	//            var mon = Math.round(((n * prin) - a) * 100) / 100;
	//            document.first.r2.value = mon;
	//            var tot = Math.round((mon / n) * 100) / 100;
	//            document.first.r3.value = tot;
	for (var i = 0; i < n; i++) {
		var z = a * r * 1;
		var q = Math.round(z * 100) / 100;
		var t = p - z;
		var w = Math.round(t * 100) / 100;
		var e = a - t;
		var l = Math.round(e * 100) / 100;
		a = e;
	}
}

</script>

<div class="four columns widget-container widget_text" id="text-9">		<div class="textwidget"><table>
  <tbody><tr>
    <td>Loan Amount : </td>
    <td><input maxlength="10" class="textBox formName" onkeypress="return isNumberKey(event)" id="txt_TotalLoanAmount" type="text" style="margin:0;"></td>
  </tr>
  <tr>
    <td>Interest Rate (p. a.) :</td>
    <td><input maxlength="10" class="textBox formName"  onkeypress="return isNumberKey(event)" id="txt_RateOfInterest" type="text" style="margin:0;"></td>
  </tr>
  <tr>
    <td>Duration :</td>
    <td><input maxlength="10" class="textBox formName"  onkeypress="return isNumberKey(event)" id="txt_Tendor" type="text" style="margin:0;"></td>
  </tr>
  <tr>
    <td><input name="Submit" class="submitBtn" onclick="CalculateEMILoan()" type="submit" style="margin:0;"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Calculated EMI : </td>
    <td><input style="font-weight: bold;" disabled="disabled" class="textBox formName" readonly="readonly" id="txtEMI" type="text"></td>
  </tr>
</tbody></table></div>
		</div>