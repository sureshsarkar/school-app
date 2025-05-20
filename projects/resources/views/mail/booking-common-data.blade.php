

<table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="margin-bottom: 30px;">
							<tbody>
								<tr>
									<th colspan="5" align="center" style="padding: 10px; font-weight: bold; font-size: 15px; color:#000;" valign="top"><strong>Booking Detail </strong></th>
								</tr>

								<tr>
									<th align="left" style="padding: 10px; background: #6c3e79; color: #fff; text-align: center; font-size: 15px;" valign="top"><strong>Checkin :</strong></th>
									<th align="left" style="padding: 10px; background: #6c3e79; color: #fff; text-align: center; font-size: 15px;" valign="top"><strong>Checkout :</strong></th>
									<th align="left" style="padding: 10px; background: #6c3e79; color: #fff; text-align: center; font-size: 15px;" valign="top"><strong>Total Guest :</strong></th>
									<th align="left" style="padding: 10px; background: #6c3e79; color: #fff; text-align: center; font-size: 15px;" valign="top"><strong>Total Night :</strong></th>
									<th align="center" style="padding: 10px; background: #6c3e79; color: #fff; text-align: center; font-size: 15px;" valign="top"><strong>Gross Amount :</strong></th>
									
								</tr>
								<tr>
									<td align="left" style="padding: 10px; font-weight: bold; font-size: 15px; color:#000; border: 1px solid #6c3e79; border-right:0px solid #6c3e79; border-bottom:0px solid #6c3e79;" valign="top">{{$data['checkin'] }}</td>
									<td align="left" style="padding: 10px; font-weight: bold; font-size: 15px; color:#000; border: 1px solid #6c3e79; border-right:0px solid #6c3e79; border-bottom:0px solid #6c3e79;" valign="top">{{$data['checkout'] }}</td>
									<td align="left" style="padding: 10px; font-weight: bold; font-size: 15px; color:#000; border: 1px solid #6c3e79; border-right:0px solid #6c3e79; border-bottom:0px solid #6c3e79;" valign="top">{{$data['total_guests'] }} ({{$data['adults']}} Adults, {{$data['child']}} Child)</td>
									<td align="left" style="padding: 10px; font-weight: bold; font-size: 15px; color:#000; border: 1px solid #6c3e79; border-right:0px solid #6c3e79; border-bottom:0px solid #6c3e79;" valign="top">{{$data['total_night'] }}</td>
									<td align="center" style="padding: 10px; font-weight: bold; font-size: 15px; color:#000; border: 1px solid #6c3e79; border-bottom:0px solid #6c3e79;" valign="top">{!! $setting_data['payment_currency'] !!}{{number_format($data['gross_amount'],2) }}</td>
								</tr>
								
								
								
								
								@if($data['rest_guests'])
								    @if($data['rest_guests']>0)
								        @if($data['guest_fee'])
								            @if($data['guest_fee']>0)
								            <tr>
            									<td align="left" colspan="4" style="padding: 10px; font-weight: bold; font-size: 15px; color:#000; border: 1px solid #6c3e79; border-right:0px solid #6c3e79; border-bottom:0px solid #6c3e79;" valign="top"><strong> Additional Guest Fee <br> <span style="font-size:13px;">({{$data['total_night']}} nights * {!! $setting_data['payment_currency'] !!}{{$data['single_guest_fee']}} * {{$data['rest_guests']}} Guests)</span></strong></td>
            									<td align="center" style="padding: 10px; font-weight: bold; font-size: 15px; color:#000; border: 1px solid #6c3e79; border-bottom:0px solid #6c3e79;" valign="top">{!! $setting_data['payment_currency'] !!}{{number_format($data['guest_fee'],2) }}</td>
            								</tr>
								            @endif
								        @endif
								    @endif
								@endif
								
								
								@if($data['total_pets'])
								    @if($data['total_pets']>0)
								        @if($data['pet_fee'])
								            @if($data['pet_fee']>0)
								            <tr>
            									<td align="left" colspan="4" style="padding: 10px; font-weight: bold; font-size: 15px; color:#000; border: 1px solid #6c3e79; border-right:0px solid #6c3e79; border-bottom:0px solid #6c3e79;" valign="top"><strong>Pet Fee :</strong></td>
            									<td align="center" style="padding: 10px; font-weight: bold; font-size: 15px; color:#000; border: 1px solid #6c3e79; border-bottom:0px solid #6c3e79;" valign="top">{!! $setting_data['payment_currency'] !!}{{number_format($data['pet_fee'],2) }}</td>
            								</tr>
								            @endif
								        @endif
								    @endif
								@endif
								
								
								
								@foreach(json_decode($data['before_total_fees']) as $c)
								<tr>
									<td align="left" colspan="4" style="padding: 10px; font-weight: bold; font-size: 15px; color:#000; border: 1px solid #6c3e79; border-right:0px solid #6c3e79; border-bottom:0px solid #6c3e79;" valign="top"><strong>{{$c->name}} :</strong></td>
									<td align="center" style="padding: 10px; font-weight: bold; font-size: 15px; color:#000; border: 1px solid #6c3e79; border-bottom:0px solid #6c3e79;" valign="top">{!! $setting_data['payment_currency'] !!}{{number_format($c->amount,2) }}</td>
								</tr>
								@endforeach
								
							
								
								 @if($data['sub_amount']!=$data['gross_amount'])
                                        @if(count(json_decode($data['after_total_fees']))>0)
                                        	<tr>
            									<td align="left" colspan="4" style="padding: 10px; font-weight: bold; font-size: 15px; color:#000; border: 1px solid #6c3e79; border-right:0px solid #6c3e79; border-bottom:0px solid #6c3e79;" valign="top"><strong>Sub Total :</strong></td>
            									<td align="center" style="padding: 10px; font-weight: bold; font-size: 15px; color:#000; border: 1px solid #6c3e79; border-bottom:0px solid #6c3e79;" valign="top">{!! $setting_data['payment_currency'] !!}{{number_format($data['sub_amount'],2) }}</td>
            								</tr>
                                        @endif
                                    @endif
								
								
								@foreach(json_decode($data['after_total_fees']) as $c)
								<tr>
									<td align="left" colspan="4" style="padding: 10px; font-weight: bold; font-size: 15px; color:#000; border: 1px solid #6c3e79; border-right:0px solid #6c3e79; border-bottom:0px solid #6c3e79;" valign="top"><strong>{{$c->name}} :</strong></td>
									<td align="center" style="padding: 10px; font-weight: bold; font-size: 15px; color:#000; border: 1px solid #6c3e79; border-bottom:0px solid #6c3e79;" valign="top">{!! $setting_data['payment_currency'] !!}{{number_format($c->amount,2) }}</td>
								</tr>
								@endforeach
								
								<tr>
									<td align="left" colspan="4" style="padding: 10px; font-weight: bold; font-size: 15px; color:#000; border: 1px solid #6c3e79; border-right:0px solid #6c3e79; border-bottom:0px solid #6c3e79;" valign="top"><strong>Total :</strong></td>
									<td align="center" style="padding: 10px; font-weight: bold; font-size: 15px; color:#000; border: 1px solid #6c3e79; border-bottom:0px solid #6c3e79;" valign="top">{!! $setting_data['payment_currency'] !!}{{number_format($data['total_amount'],2) }}</td>
								</tr>
								@php $gaurav_discount=0;@endphp
							    @if($data['discount'])
                                    @if($data['discount']!="")
                                        @if($data['discount']!=0)
                                               @php $gaurav_discount=1;@endphp 
                                        <tr>
                                            <td align="left" colspan="4" style="padding: 10px; font-weight: bold; font-size: 15px; color:#000; border: 1px solid #6c3e79; border-right:0px solid #6c3e79; border-bottom:0px solid #6c3e79;" valign="top"><strong>Discount ({{ $data['discount_coupon'] }}):</strong></td>
                                            <td align="center" style="padding: 10px; font-weight: bold; font-size: 15px; color:#000; border: 1px solid #6c3e79; border-bottom:0px solid #6c3e79;" valign="top">- {!! $setting_data['payment_currency']  !!}{{number_format($data['discount'],2) }}</td>
                                        </tr>
                                      
                                        @endif
                                    @endif
                                @endif
							    @if($data['extra_discount'])
                                    @if($data['extra_discount']!="")
                                        @if($data['extra_discount']>0)
                                               @php $gaurav_discount=1;@endphp 
                                        <tr>
                                            <td align="left" colspan="4" style="padding: 10px; font-weight: bold; font-size: 15px; color:#000; border: 1px solid #6c3e79; border-right:0px solid #6c3e79; border-bottom:0px solid #6c3e79;" valign="top"><strong>Extra Discount :</strong></td>
                                            <td align="center" style="padding: 10px; font-weight: bold; font-size: 15px; color:#000; border: 1px solid #6c3e79; border-bottom:0px solid #6c3e79;" valign="top">- {!! $setting_data['payment_currency']  !!}{{number_format($data['extra_discount'],2) }}</td>
                                        </tr>
                                      
                                        @endif
                                    @endif
                                @endif
								@if($gaurav_discount==1)
								    <tr>
                                        <td align="left" colspan="4" style="padding: 10px; font-weight: bold; font-size: 15px; color:#000; border: 1px solid #6c3e79; border-right:0px solid #6c3e79; border-bottom:0px solid #6c3e79;" valign="top"><strong>Total Amount after Discount:</strong></td>
                                        <td align="center"  style="padding: 10px; font-weight: bold; font-size: 15px; color:#000; border: 1px solid #6c3e79; border-bottom:0px solid #6c3e79;" valign="top">{!! $setting_data['payment_currency']  !!}{{number_format($data['after_discount_total'],2) }}</td>
                                    </tr>
								@endif
								
							 @if($data['amount_data'])
                                        @php
                                            $amount_data=json_decode($data['amount_data'],true);
                                        @endphp
                                        @if(is_array($amount_data))
                                            @foreach($amount_data as $c)
                                                @php $status='';@endphp
                                                @if(isset($c['status']))
                                                    @php $status='(<span style="color:green;">Paid</span>)'; @endphp
                                                @endif
                                            <tr>
                                                <td align="left" colspan="4" style="padding: 10px; font-weight: bold; font-size: 15px; color:#000; border: 1px solid #6c3e79; border-right:0px solid #6c3e79;" valign="top"><strong>{{$c['message']}} {!! $status !!}:</strong></td>
                                                <td align="center" style="padding: 10px; font-weight: bold; font-size: 15px; color:#000; border: 1px solid #6c3e79;" valign="top">{!! $setting_data['payment_currency'] !!}{{number_format($c['amount'],2) }}</td>
                                            </tr>
                                            @endforeach
                                        @endif
                                    @endif




							</tbody>
						</table>