@include ('admin.layouts.header')
@include ('admin.layouts.sidebar')

<div class="grid_10">
            <div style="height: 900px" class="box round first grid">

          <h2 style="text-align: center;"> Birth Info </h2>
               <div class="block copyblock">
<form action="{{Route('birthupdate')}}/{{$birth_edit->birth_id}}" method="post">
                 @csrf
                  <table class="form">

                    <tr>
                      <td>
                        <label>Today date</label>
                      </td>
                    <td>
                      <input type="text" name="date" value="{{$birth_edit->date}}" class="medium" required="required"/>
                      </td>
                    </tr>
                      <tr>
                      <td>
                          <label>patient Id</label>
                      </td>
                      <td>
                          <input type="text" name="patient_id" value="{{$birth_edit->patient_id}}" class="medium" required="required"/>
                      </td>
                      </tr>
                      <tr>
                          <td>
                              <label>Child Name</label>
                          </td>
                          <td>
                              <input type="text" name="title" value="{{$birth_edit->cname}}" class="medium" required="required"/>
                          </td>
                      </tr>
                      <tr>
                          <td>
                              <label>Father Name</label>
                          </td>
                          <td>
                              <input type="text" name="title" value="{{$birth_edit->fname}}" class="medium" required="required"/>
                          </td>
                      </tr>
              <tr>
                <td>
                    <label>Title</label>
                </td>
                    <td>
                        <input type="text" name="title" value="{{$birth_edit->title}}" class="medium" required="required"/>
                    </td>
                </tr>
                <tr>
                <td>
                    <label>Description</label>
            </td>
               <td>
                  <input type="text" name="description" value="{{$birth_edit->description}}" class="medium" required="required"/>
                    </td>
                </tr>
                <tr>
                <td>
                    <label>Doctor Name</label>
            </td>
               <td>
                  <input type="text" name="doctor_id" value="{{$birth_edit->doctor_id}}" class="medium" required="required"/>
                    </td>
                </tr>
          <tr>
                <td>
                    <label>Status</label>
            </td>
               <td>
                  <input type="text" name="status" value="{{$birth_edit->status}}" class="medium" required="required"/>
                    </td>
                </tr>

                <tr>
                   <td>
                    <input type="submit" name="submit" Value="Update" class="btn btn-success"/>
                    </td>
                  </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
@include ('admin.layouts.footer')
