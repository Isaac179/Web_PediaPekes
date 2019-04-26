<div class="col-md-4 col-sm-12 col-xs-12 clinic-form">
  <form class="appoinment-form">
    <h5><i class="fa fa-calendar-check-o"></i>Agenda una cita</h5>
    <div class="form-group col-md-12 no-padding">
      <input type="text" class="form-control" placeholder="Tu Nombre" id="patient_name" name="patient-name">
    </div>
    <div class="form-group col-md-12 no-padding">
      <input type="email" class="form-control" placeholder="Dirección Email" id="patient_email" name="patient-email">
    </div>
    <div class="form-group input-group col-md-12 no-padding">
      <div class="col-md-7 col-sm-8 col-xs-8 no-padding">
        <div class="col-md-6 col-sm-6 col-xs-6 no-left-padding">
          <div class='date' id='datetimepicker1'>
            <input type='text' class="form-control" id="patient_date" name="patient-date" placeholder="Día" />
            <span class="fa fa-angle-down"></span>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-6 no-left-padding">
          <select class="selectpicker" id="patient_time" name="patient-time">
            <option>Hora</option>
            <option>09:00</option>
            <option>10:00</option>
            <option>11:00</option>
            <option>12:00</option>
            <option>13:00</option>
            <option>14:00</option>
            <option>15:00</option>
            <option>16:00</option>
            <option>17:00</option>
            <option>18:00</option>
            <option>19:00</option>
          </select>
        </div>
      </div>
      <div class="col-md-5 col-sm-4 col-xs-4 no-padding">
        <select class="selectpicker"  id="patient_department" name="patient-department">
            <option>Especialidad</option>
          <option>Crecimiento y desarrollo</option>
          <option>Esquemas de vacunación</option>
          <option>Lactancia materna</option>
          <option>Consulta del niño sano</option>
          <option>Cuidados generales del niño</option>
          <option>Neonatologo</option>
          <option>Infectología</option>

        </select>
      </div>
    </div>
    <div class="form-group col-md-12 col-sm-12 col-xs-12 no-padding">
      <textarea rows="4" class="form-control" placeholder="Tu Mensaje..." id="patient_message" name="patient-message"></textarea>
    </div>
    <button type="submit" id="appointment_submit" class="btn-submit pull-right"><i class="fa fa-heart-o"></i>Enviar</button>
    <div id="appointment-alert-msg" class="alert-msg"></div>
  </form>
</div>
