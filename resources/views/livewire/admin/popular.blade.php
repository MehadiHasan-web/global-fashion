<div>

    <div class="col-8 mt-5 rounded">
        <div class="d-flex justify-content-between ">
            <h2 class="mb-2">Popular products</h2>

            <select wire:model.live="date" class="form-control w-25 ml-5 mt-2" id="exampleFormControlSelect1">
                <option value="all" selected>All</option>
                <option value="today">Today</option>
                <option value="lastday">Last Day</option>
                <option value="thisweek">This Week</option>
                <option value="thismonth">This Month</option>
                <option value="lastmonth">Last Month</option>
                <option value="thisyear">This Year</option>
                <option value="lastyear">Last Year</option>
            </select>

        </div>


        <table class="table table-hover border shadow rounded mt-2 ">
            <thead>
                <tr>
                    <th scope="col">SL</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                </tr>
            </thead>
            <tbody>
                @isset($popular)
                    @foreach ($popular as $item)
                        <tr>
                            <th scope="row">{{ $item->id ?? '' }}</th>
                            <td>{{ $item->name ?? '' }}</td>
                            <td>{{ $item->price ?? '' }}</td>
                        </tr>
                    @endforeach
                @endisset

            </tbody>
        </table>
    </div>







</div>
