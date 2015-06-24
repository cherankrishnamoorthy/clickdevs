@extends('layouts/main')



@section('content')



<div class="row">
    <div class="col-lg-12 col-lg-offset-1">
        <span class="greeting"> {{$greeting}} </span> {!!Html::link('/auth/logout',trans('Log out'),['class' => 'btn btn-xs btn-default logoutBtn'])!!} 
<table style="display: inline-table;" border="0" cellpadding="0" cellspacing="0" width="1011">
    
<!-- fwtable fwsrc="contacts.png" fwpage="Page 1" fwbase="contacts.png" fwstyle="Dreamweaver" fwdocid = "1706086784" fwnested="0" -->
  <tr>
   <td><img src="/img/booklayout/spacer.gif" width="20" height="1" border="0" alt="" /></td>
   <td><img src="/img/booklayout/spacer.gif" width="23" height="1" border="0" alt="" /></td>
   <td><img src="/img/booklayout/spacer.gif" width="13" height="1" border="0" alt="" /></td>
   <td><img src="/img/booklayout/spacer.gif" width="353" height="1" border="0" alt="" /></td>
   <td><img src="/img/booklayout/spacer.gif" width="44" height="1" border="0" alt="" /></td>
   <td><img src="/img/booklayout/spacer.gif" width="21" height="1" border="0" alt="" /></td>
   <td><img src="/img/booklayout/spacer.gif" width="69" height="1" border="0" alt="" /></td>
   <td><img src="/img/booklayout/spacer.gif" width="19" height="1" border="0" alt="" /></td>
   <td><img src="/img/booklayout/spacer.gif" width="70" height="1" border="0" alt="" /></td>
   <td><img src="/img/booklayout/spacer.gif" width="11" height="1" border="0" alt="" /></td>
   <td><img src="/img/booklayout/spacer.gif" width="68" height="1" border="0" alt="" /></td>
   <td><img src="/img/booklayout/spacer.gif" width="253" height="1" border="0" alt="" /></td>
   <td><img src="/img/booklayout/spacer.gif" width="23" height="1" border="0" alt="" /></td>
   <td><img src="/img/booklayout/spacer.gif" width="1" height="1" border="0" alt="" /></td>
   <td><img src="/img/booklayout/spacer.gif" width="23" height="1" border="0" alt="" /></td>
   <td><img src="/img/booklayout/spacer.gif" width="1" height="1" border="0" alt="" /></td>
  </tr>

  <tr>
   <td colspan="6"><img name="contacts_r1_c1" src="/img/booklayout/contacts_r1_c1.png" width="474" height="8" border="0" id="contacts_r1_c1" alt="" /></td>
   <td rowspan="9"><img name="contacts_r1_c7" src="/img/booklayout/contacts_r1_c7.png" width="69" height="742" border="0" id="contacts_r1_c7" alt="" /></td>
   <td colspan="7"><img name="contacts_r1_c8" src="/img/booklayout/contacts_r1_c8.png" width="445" height="8" border="0" id="contacts_r1_c8" alt="" /></td>
   <td rowspan="8"><img name="contacts_r1_c15" src="/img/booklayout/contacts_r1_c15.png" width="23" height="732" border="0" id="contacts_r1_c15" alt="" /></td>
   <td><img src="/img/booklayout/spacer.gif" width="1" height="8" border="0" alt="" /></td>
  </tr>
  <tr>
   <td rowspan="8"><img name="contacts_r2_c1" src="/img/booklayout/contacts_r2_c1.png" width="20" height="734" border="0" id="contacts_r2_c1" alt="" /></td>
   <td colspan="5"><img name="contacts_r2_c2" src="/img/booklayout/contacts_r2_c2.png" width="454" height="57" border="0" id="contacts_r2_c2" alt="" /></td>
   <td colspan="7"><img name="contacts_r2_c8" src="/img/booklayout/contacts_r2_c8.png" width="445" height="57" border="0" id="contacts_r2_c8" alt="" /></td>
   <td><img src="/img/booklayout/spacer.gif" width="1" height="57" border="0" alt="" /></td>
  </tr>
  <tr>
   <td><img name="contacts_r3_c2" src="/img/booklayout/contacts_r3_c2.png" width="23" height="25" border="0" id="contacts_r3_c2" alt="" /></td>
   <td rowspan="3"><img name="contacts_r3_c3" src="/img/booklayout/contacts_r3_c3.png" width="13" height="607" border="0" id="contacts_r3_c3" alt="" /></td>
   <td rowspan="2" colspan="2" class="phonebookPage">
       
       <div class="list-group">


   
   
 
       <a ng-repeat="contact in contacts" ng-href="/home/<% contact.id %>"   class="list-group-item"> <% contact.name%></a>
   
</div>
  
   
   
   
   </td>
   <td rowspan="2">&nbsp;</td>
   <td rowspan="2" colspan="5"  class="phonebookPage">
       
       
       <h3 class="text-center"> {{$selected->name}}</h3>
       <p class="text-center"> {{$selected->designation}}</p>
       <br /> 
       <h5> <p class="contactLabel">{{trans('Work')}}</p> <p class="contactVal">{{$selected->workphone}}</p></h5>
       <h5> <p class="contactLabel">{{trans('Phone')}}</p><p class="contactVal">{{$selected->phone}}</p></h5>
       <h5> <p class="contactLabel">{{trans('Email')}}</p><p class="contactVal">{{$selected->email}}</p></h5>
       <h5> <p class="contactLabel">{{trans('Office')}}</p><p class="contactVal">{{$selected->work_address}}</p></h5>
       <hr />
       <h5> <p class="contactLabel">{{trans('Notes')}}</p><br /><br />{{$selected->work_address}}</h5>
   </td>
   <td rowspan="2"><img name="contacts_r3_c13" src="/img/booklayout/contacts_r3_c13.png" width="23" height="606" border="0" id="contacts_r3_c13" alt="" /></td>
   <td rowspan="6"><img name="contacts_r3_c14" src="/img/booklayout/contacts_r3_c14.png" width="1" height="667" border="0" id="contacts_r3_c14" alt="" /></td>
   <td><img src="/img/booklayout/spacer.gif" width="1" height="25" border="0" alt="" /></td>
  </tr>
  <tr>
   <td rowspan="5"><img name="contacts_r4_c2" src="/img/booklayout/contacts_r4_c2.png" width="23" height="642" border="0" id="contacts_r4_c2" alt="" /></td>
   <td><img src="/img/booklayout/spacer.gif" width="1" height="581" border="0" alt="" /></td>
  </tr>
  <tr>
   <td rowspan="2" colspan="3"><img name="contacts_r5_c4" src="/img/booklayout/contacts_r5_c4.png" width="418" height="9" border="0" id="contacts_r5_c4" alt="" /></td>
   <td colspan="5"><img name="contacts_r5_c8" src="/img/booklayout/contacts_r5_c8.png" width="421" height="1" border="0" id="contacts_r5_c8" alt="" /></td>
   <td rowspan="4"><img name="contacts_r5_c13" src="/img/booklayout/contacts_r5_c13.png" width="23" height="61" border="0" id="contacts_r5_c13" alt="" /></td>
   <td><img src="/img/booklayout/spacer.gif" width="1" height="1" border="0" alt="" /></td>
  </tr>
  <tr>
   <td><img name="contacts_r6_c3" src="/img/booklayout/contacts_r6_c3.png" width="13" height="8" border="0" id="contacts_r6_c3" alt="" /></td>
   <td colspan="5"><img name="contacts_r6_c8" src="/img/booklayout/contacts_r6_c8.png" width="421" height="8" border="0" id="contacts_r6_c8" alt="" /></td>
   <td><img src="/img/booklayout/spacer.gif" width="1" height="8" border="0" alt="" /></td>
  </tr>
  <tr>
   <td rowspan="2" colspan="2"><img name="contacts_r7_c3" src="/img/booklayout/contacts_r7_c3.png" width="366" height="52" border="0" id="contacts_r7_c3" alt="" /></td>
   <td class="contactAdd" ng-click="add({{$id}});"></td>
   <td rowspan="2"><img name="contacts_r7_c6" src="/img/booklayout/contacts_r7_c6.png" width="21" height="52" border="0" id="contacts_r7_c6" alt="" /></td>
   <td rowspan="2"><img name="contacts_r7_c8" src="/img/booklayout/contacts_r7_c8.png" width="19" height="52" border="0" id="contacts_r7_c8" alt="" /></td>
   <td style="background-color:#DDDDDD" class="contactEdit" ng-click="edit({{$id}});"></td>
   <td rowspan="2"><img name="contacts_r7_c10" src="/img/booklayout/contacts_r7_c10.png" width="11" height="52" border="0" id="contacts_r7_c10" alt="" /></td>
   <td style="background-color:#DDDDDD"  ><img name="contacts_r7_c11" src="/img/booklayout/contacts_r7_c11.png" width="68" height="38" border="0" id="contacts_r7_c11" alt="" /></td>
   
   
   <td rowspan="2"><img name="contacts_r7_c12" src="/img/booklayout/contacts_r7_c12.png" width="253" height="52" border="0" id="contacts_r7_c12" alt="" /></td>
   <td><img src="/img/booklayout/spacer.gif" width="1" height="38" border="0" alt="" /></td>
  </tr>
  <tr>
   <td><img name="contacts_r8_c5" src="/img/booklayout/contacts_r8_c5.png" width="44" height="14" border="0" id="contacts_r8_c5" alt="" /></td>
   <td><img name="contacts_r8_c9" src="/img/booklayout/contacts_r8_c9.png" width="70" height="14" border="0" id="contacts_r8_c9" alt="" /></td>
   <td><img name="contacts_r8_c11" src="/img/booklayout/contacts_r8_c11.png" width="68" height="14" border="0" id="contacts_r8_c11" alt="" /></td>
   <td><img src="/img/booklayout/spacer.gif" width="1" height="14" border="0" alt="" /></td>
  </tr>
  <tr>
   <td colspan="5"><img name="contacts_r9_c2" src="/img/booklayout/contacts_r9_c2.png" width="454" height="10" border="0" id="contacts_r9_c2" alt="" /></td>
   <td colspan="8"><img name="contacts_r9_c8" src="/img/booklayout/contacts_r9_c8.png" width="468" height="10" border="0" id="contacts_r9_c8" alt="" /></td>
   <td><img src="/img/booklayout/spacer.gif" width="1" height="10" border="0" alt="" /></td>
  </tr>
</table>
<style>
    
    td img {display: block;}
     
</style>
    </div>
</div>
@stop