@extends('admin.layouts.default')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="col" style="font-family: AKbalthom KhmerHand">និយោគជិក</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item" style="font-family: AKbalthom KhmerHand"><a href="#">ទំព័រដើម</a></li>
                        <li class="breadcrumb-item" style="font-family: AKbalthom KhmerHand">និយោគជិក</li>
                    </ol>
                </div><!-- /.col -->
                <div class="container-fluid mt-4">
                    <div class="card">
                        <div class="card-head py-2">
                            <div class="container p-5">
                                <div class="modal-header">
                                    <span style="font-family: AKbalthom KhmerHand;">ចុះឈ្មោះបុគ្គលិកថ្មី</span>
                                    <button type="button" onclick="event.preventDefault();
                                            document.getElementById('form-submit').submit()";
                                            class="btn btn-outline-primary">
                                        <i class="fas fa-save"></i> រក្សាទុក</button>
                                </div>
                                <form action="{{route('admin.employees.store')}}" method="POST" enctype="multipart/form-data" id="form-submit">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">ឈ្មោះរបស់បុគ្គលិក</label>
                                                <input type="text" name="name" class="form-control" id="name" placeholder="ឈ្មោះបុគ្គលិក">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="gender">ភេទ</label>
                                                <select id="inputState" name="gender" class="form-control">
                                                    <option selected>ជ្រើសរើសភេទ</option>
                                                    <option value="1">ប្រុស</option>
                                                    <option value="2">ស្រី</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">លេខកូដ</label>
                                                <input type="text" name="id_card" class="form-control" id="name" placeholder="លេខសម្គាល់បុគ្គលិក">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">ថ្ងៃខែឆ្នាំកំណើត</label>
                                                <input type="date" name="dob" class="form-control" id="name" placeholder="ថ្ងៃខែឆ្នាំកំណើត">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">ថ្ងៃចូលធ្វើការ</label>
                                                <input type="date" name="date_in" class="form-control" id="name" placeholder="ថ្ងៃចូលធ្វើការ">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="position">តួនាទីបុគ្គលិក</label>
                                                <select id="position" name="position" class="form-control">
                                                    <option selected>ជតួនាទីបុគ្គលិក</option>
                                                    <option value="1">អ្នកគិតលុយ</option>
                                                    <option value="2">គណនី</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">ការបញ្ចប់ការសិក្សា</label>
                                                <input type="text" name="graduate" class="form-control" id="name" placeholder="ឆ្នាំបច្ចុប្បន្នការសិក្សា">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">ប្រាក់បៀវត្តន៍</label>
                                                <input type="number" name="salary" class="form-control" id="name" placeholder="ប្រាក់បៀវត្តន៍">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">លេខទូរសព្ទ</label>
                                                <input type="number" name="phone" class="form-control" id="name" placeholder="លេខទំនាក់ទំនង">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="img">រូបភាព</label>
                                                <div class="custom-file">
                                                    <input type="file"  name="image" class="custom-file-input" id="img">
                                                    <label class="custom-file-label" for="img">ជ្រើសរើសរូបភាព</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="loact">ទីលំនៅ</label>
                                            <textarea class="form-control" name="address" id="locat" placeholder="ទីលំនៅបច្ចុប្បន្ន" ></textarea>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </div><!-- /.container-fluid -->
    </div>
    </div>
@endsection
