<table class="table datatables table-bordered table-hover table-data" id="table-category-field">
    <thead>
        <tr class="text-uppercase">
            <th class="w-5p">No</th>
            <th class="w-15p">Code</th>
            <th>Nama</th>
            <th class="w-10p">Icon</th>
            <th class="w-5p">Action</th>

        </tr>
    </thead>
    <tbody>
        @forelse ($data as $key => $item)
            <tr>
                <td class="w-5p">{{ $key + 1 }}</td>
                <td class="w-15p">{{ $item->code }}</td>
                <td>{{ $item->name }}</td>
                {{-- <td class="w-10p">
                    <img src="{{ asset($item->logo) }}" class="w-50" alt="">
                </td> --}}
                @if ($item->logo != '')
                    <td class="w-10p">
                        <div style="display: flex;width:100%;justify-content:center;">
                            <img style="width:80px;height:80px;"
                                src="{{ url('admin/images/logo-category-field/' . $item->logo) }}">
                        </div>
                    </td>
                @else
                    <td class="w-10p"></td>
                @endif
                <td class="w-5p">
                    <div class="btn-group btn-group-sm" role="group">
                        <button type="button" class="btn p5x btn-sm btn-outline-warning"
                            onclick="openModal('category-field','edit', {{ $item->id }})"><span
                                class="fe fe-edit"></span></button>
                        <button type="button" class="btn p5x btn-sm btn-outline-danger"
                            onclick="manageData('delete',{{ $item->id }}, '{{ $item->name }}')"><span
                                class="fe fe-trash"></span></button>
                    </div>
                </td>
            </tr>
        @empty
        @endforelse
    </tbody>
</table>
