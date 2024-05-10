<table class="table datatables table-bordered table-hover table-data" id="table-social-media-field">
    <thead>
        <tr class="text-uppercase">
            <th class="w-5p">No</th>
            <th>Nama</th>
            <th>Link</th>
            <th class="w-20p">Logo</th>
            <th>Deskripsi</th>
            <th class="w-5p">Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($data as $key => $item)
            <tr>
                <td class="w-5p">{{ $key + 1 }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->link }}</td>
                @if ($item->logo != '')
                    <td class="w-20p">
                        <div style="display: flex;width:100%;justify-content:center;">
                            <img style="width:80px;height:80px;"
                                src="{{ url('admin/images/logo-social-media/' . $item->logo) }}">
                        </div>
                    </td>
                @else
                    <td class="w-20p"></td>
                @endif
                <td>{{ $item->description }}</td>
                <td class="w-5p">
                    <div class="btn-group btn-group-sm" role="group">
                        <button type="button" class="btn p5x btn-sm btn-outline-warning"
                            onclick="openModal('social-media','edit', {{ $item->id }})"><span
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
