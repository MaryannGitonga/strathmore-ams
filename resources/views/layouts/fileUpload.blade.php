@extends('layouts.app')

@section('content')






     <div align="center"><table class="table"><tbody></tbody>
    <tbody>

            </tr>
            <tr>
                <td>
                    <form id="documentsUpload" method="post" enctype="multipart/form-data"><input type="hidden" name="Command" value="Upload_Documents"><input type="hidden" name="inpUserType" value="ALUMNO"><table><tbody><tr><th colspan="2"><label>Please Upload the files below</label></th></tr><tr><td class="subhead"><label>Secondary school results slip</label></td><td><input type="file" name="inpResultSlip" id="inpResultSlip"></td></tr><tr><td class="subhead"><label>National ID/Passport/Birth certificate</label></td><td><input type="file" name="inpId" id="inpId"></td></tr><tr><td></td>
                        <td><div class="buttons" align="center"><a href="#" onclick="validateForm('POST'); return false;"><img src="https://su-sso.strathmore.edu/web/images/Guardar.jpg" alt="Save" border="0"></button></div></td></tr></tbody></table></form></td></tr></tbody></table></div></div></div></div>







</form>

@endsection
