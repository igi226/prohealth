@extends('User.Dashboard.mainDashboard')
@section('dashboard')
<div>  
    <div> 
        <div class="d-flex justify-content-between">
            <h3 class="das">Purchase History</h3>
        </div>

        <div class="dashboard-table table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th class="id">#</th>
                        <th class="courses">Plan</th>
                        <th class="amount">Amount</th>
                        <th class="status">Status</th>
                        <th class="amount"> Puchase date</th>
                        <th class="date"> End date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($myplans as $item)
                        
                   
                    <tr>
                        <td>
                            
                            <div class="dashboard-table__text">{{ $loop->iteration }}</div>
                        </td>
                        <td class="course-info">
                          
                            <div class="dashboard-table__text">
                                <p>{{ $item->package->package_name }}</p>
                            </div>
                        </td>
                        <td class="correct">
                            
                            <div class="dashboard-table__text">
                                <span class="sale-price">${{ $item->amount }}</span>
                            </div>
                        </td>
                        <td class="incorrect">
                            {{-- {{ dd(date('Y-m-d')) }} --}}
                            @php
                                if($item->end_date > date('Y-m-d') ){
                                    $status = "Ongoing";
                                    $class = "dashboard-table__text activeStatus";
                                }elseif($item->end_date < date('Y-m-d')){
                                    $status = "Ended";
                                    $class = "dashboard-table__text";
                                }
                            @endphp
                            <div class="{{ $class }}">{{ $status }}</div>
                        </td>
                        <td class="earned">
                            {{-- <div class="dashboard-table__mobile-heading">Date</div> --}}
                            <div class="dashboard-table__text">{{ Carbon\Carbon::parse($item->created_at)->format('D, d M Y H:i') }}</div>
                        </td>
                        <td class="earned">
                            {{-- <div class="dashboard-table__mobile-heading">Date</div> --}}
                            <div class="dashboard-table__text">{{ Carbon\Carbon::parse($item->end_date)->format('D, d M Y H:i') }}</div>
                        </td>
                    </tr>
                    @endforeach
                    {{-- <tr>
                        <td>
                            <div class="dashboard-table__mobile-heading">ID</div>
                            <div class="dashboard-table__text">#10852</div>
                        </td>
                        <td class="course-info">
                            <div class="dashboard-table__mobile-heading">Courses</div>
                            <div class="dashboard-table__text">
                                <p>Internationally Accredited Diploma in Weight Loss</p>
                                <p>Investment Management Specialization</p>
                            </div>
                        </td>
                        <td class="correct">
                            <div class="dashboard-table__mobile-heading">Amount</div>
                            <div class="dashboard-table__text">
                                <span class="sale-price">$43.<small class="separator">99</small></span>
                            </div>
                        </td>
                        <td class="incorrect">
                            <div class="dashboard-table__mobile-heading">Status</div>
                            <div class="dashboard-table__text hold">On Hold</div>
                        </td>
                        <td class="earned">
                            <div class="dashboard-table__mobile-heading">Date</div>
                            <div class="dashboard-table__text">January 31, 2022</div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="dashboard-table__mobile-heading">ID</div>
                            <div class="dashboard-table__text">#10839</div>
                        </td>
                        <td class="course-info">
                            <div class="dashboard-table__mobile-heading">Courses</div>
                            <div class="dashboard-table__text">
                                <p>Photography Masterclass: A Complete Guide to Photography</p>
                            </div>
                        </td>
                        <td class="correct">
                            <div class="dashboard-table__mobile-heading">Amount</div>
                            <div class="dashboard-table__text">
                                <span class="sale-price">$49.<small class="separator">00</small></span>
                            </div>
                        </td>
                        <td class="incorrect">
                            <div class="dashboard-table__mobile-heading">Status</div>
                            <div class="dashboard-table__text">Processing</div>
                        </td>
                        <td class="earned">
                            <div class="dashboard-table__mobile-heading">Date</div>
                            <div class="dashboard-table__text">January 30, 2022</div>
                        </td>
                    </tr> --}}
                </tbody> 
            </table>
        </div>
    </div>
</div>
@endsection