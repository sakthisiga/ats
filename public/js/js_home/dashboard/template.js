var Template = function() {
  
    // ------------------------------------------------------------------------
  
    this.__construct = function() {
        //console.log('Template Created');
        list_company();
        list_audit_jobs();
        list_ags_reg_jobs();
    };
    
      // ------------------------------------------------------------------------
    
    this.get_lead_info = function(obj, group) {
        var output = '<div class="col-lg-3"><div class="well well-lg no-padding">';
            output += '<form id="update_lead" method="post" action="../api/update_lead">';
            output += '<table class="table table-condensed lead_info_tbl">';
            output += '<tr><th><u>Lead_Details</u></th>';
                if(group == 1)
            output += '<th><input type="checkbox" class="minimal" id="lead_edit"></th>';
            output += '</tr>';

            output += '<tr><td>Date</td><td>';
            output += '<input type="text" class="form-control input-sm"  id="date" name="date" value="'+ obj.date + '" disabled="true">';
            output += '</td></tr>'

            output += '<tr><td>Source</td><td>';
            output += '<input type="text" class="form-control input-sm"  id="source" name="source" value="'+ obj.source + '" disabled="true">';
            output += '</td></tr>'

            output += '<tr><td>Lead ID</td><td>';
            output += '<input type="text" class="form-control input-sm"  id="leadid" name="leadid" value="'+ obj.lead_id+ '" readonly="readonly">';
            output += '</td></tr>'

            
            output += '<tr><td>Name (P)</td><td>';
            output += '<input type="text" class="ld_txt form-control input-sm"  id="name1" name="name1" value="'+ obj.name_1 + '" disabled="true">';
            output += '</td></tr>'

            output += '<tr><td>Name (S)</td><td>';
            output += '<input type="text" class="ld_txt form-control input-sm"  id="name2" name="name2" value="'+ obj.name_2 + '" disabled="true">';
            output += '</td></tr>'

            output += '<tr><td>Contact (P)</td><td>';
            output += '<input type="text" class="ld_txt form-control input-sm"  id="contact1" name="contact1" value="'+ obj.contact_1 + '" disabled="true">';
            output += '</td></tr>'

            output += '<tr><td>Contact (S)</td><td>';
            output += '<input type="text" class="ld_txt form-control input-sm"  id="contact2" name="contact2" value="'+ obj.contact_2 + '" disabled="true">';
            output += '</td></tr>'

            output += '<tr><td>Email (P)</td><td>';
            output += '<input type="text" class="ld_txt form-control input-sm"  id="email1" name="email1" value="'+ obj.email_1 + '" disabled="true">';
            output += '</td></tr>'

            output += '<tr><td>Email (S)</td><td>';
            output += '<input type="text" class="ld_txt form-control input-sm"  id="email2" name="email2" value="'+ obj.email_2 + '" disabled="true">';
            output += '</td></tr>'

            output += '<tr><td>Created by</td><td>';
            output += '<input type="text" class="form-control input-sm"  id="name1" name="name1" value="'+ obj.user + '" disabled="true">';
            output += '</td></tr>'

            output += '<tr><td></td><td><input type= "submit" class="btn btn-danger btn-sm pull-right ld_btn" type="button" style="display: none;" value="Update"></td></tr>';
            output += '</table>';
            output += '</div></div>';

            output += '</form>';

            return output;

    }
    
    // ------------------------------------------------------------------------

   var list_company = function(name, id, obj, ld) {
        var output = '';
        output += '<tr><td>' + name + '</td><td>';
        //output += '<td><select class="company" name="'+ id +'" id="'+ id +'" disabled="true">';
            if(obj)
        output += '<input type="checkbox" class="company" name="'+ id +'" id="'+ id +'" value="'+ id +'" data-leadid="' + ld + '" data-name="'+ id +'" disabled="true" checked>';
            else
        output += '<input type="checkbox" class="company" name="'+ id +'" id="'+ id +'" value="'+ id +'" data-leadid="' + ld + '" data-name="'+ id +'" disabled="true">';            
        output += '</td></tr>';
        return output;

    }

     // ------------------------------------------------------------------------

   var list_audit_jobs = function(name, id, obj, ld) {
        var output = '';
        output += '<tr><td>' + name + '</td><td>';
        //output += '<td><select class="company" name="'+ id +'" id="'+ id +'" disabled="true">';
            if(obj)
        output += '<input type="checkbox" class="audit" name="'+ id +'" id="'+ id +'" value="'+ id +'" data-leadid="' + ld + '" data-name="'+ id +'" disabled="true" checked>';
            else
        output += '<input type="checkbox" class="audit" name="'+ id +'" id="'+ id +'" value="'+ id +'" data-leadid="' + ld + '" data-name="'+ id +'" disabled="true">';            
        output += '</td></tr>';
        return output;
    }

     // ------------------------------------------------------------------------

   var list_ags_reg_jobs = function(name, id, obj, ld) {
        var output = '';
        output += '<tr><td>' + name + '</td><td>';
        //output += '<td><select class="company" name="'+ id +'" id="'+ id +'" disabled="true">';
            if(obj)
        output += '<input type="checkbox" class="ags-reg" name="'+ id +'" id="'+ id +'" value="'+ id +'" data-leadid="' + ld + '" data-name="'+ id +'" disabled="true" checked>';
            else
        output += '<input type="checkbox" class="ags-reg" name="'+ id +'" id="'+ id +'" value="'+ id +'" data-leadid="' + ld + '" data-name="'+ id +'" disabled="true">';            
        output += '</td></tr>';
        return output;
    }

 // ------------------------------------------------------------------------

   var list_tech_jobs = function(name, id, obj, ld) {
        var output = '';
        output += '<tr><td>' + name + '</td><td>';
        //output += '<td><select class="company" name="'+ id +'" id="'+ id +'" disabled="true">';
            if(obj)
        output += '<input type="checkbox" class="tech" name="'+ id +'" id="'+ id +'" value="'+ id +'" data-leadid="' + ld + '" data-name="'+ id +'" disabled="true" checked>';
            else
        output += '<input type="checkbox" class="tech" name="'+ id +'" id="'+ id +'" value="'+ id +'" data-leadid="' + ld + '" data-name="'+ id +'" disabled="true">';            
        output += '</td></tr>';
        return output;
    }

     // ------------------------------------------------------------------------

   var list_legal_jobs = function(name, id, obj, ld) {
        var output = '';
        output += '<tr><td>' + name + '</td><td>';
        //output += '<td><select class="company" name="'+ id +'" id="'+ id +'" disabled="true">';
            if(obj)
        output += '<input type="checkbox" class="legal" name="'+ id +'" id="'+ id +'" value="'+ id +'" data-leadid="' + ld + '" data-name="'+ id +'" disabled="true" checked>';
            else
        output += '<input type="checkbox" class="legal" name="'+ id +'" id="'+ id +'" value="'+ id +'" data-leadid="' + ld + '" data-name="'+ id +'" disabled="true">';            
        output += '</td></tr>';
        return output;
    }

    // --------------------------------------------------------------------------


     this.get_company_reg_info = function(obj, grp) {
            var output = '';
                output += '<form action="#" method="post">';
                output += '<div class="col-lg-2"><div class="well well-lg no-padding">';
                output += '<table class="table table-condensed incorporation_tbl"><tr><th><u>Incorporation_Details</u></th>';
                    if(grp == 1)
                output += '<th><input type="checkbox" id="company_edit"></i></th>';
                output += '</tr>';
                output += list_company('New PVT Company', 'new_pvt_company', obj.new_pvt_company, obj.lead_id);
                output += list_company('New OPC Company', 'new_opc_company', obj.new_opc_company, obj.lead_id);
                output += list_company('New LLP Company', 'new_llp_company', obj.new_llp_company, obj.lead_id);
                output += list_company('New Trust', 'new_trust', obj.new_trust, obj.lead_id);
                output += list_company('Alteration of Capital', 'alteration_of_capital', obj.alteration_of_capital, obj.lead_id);
                output += list_company('Consultation', 'lib_consultation', obj.lib_consultation, obj.lead_id);
                output += list_company('Address Change', 'address_change', obj.address_change, obj.lead_id);
                output += list_company('ROC Compliance', 'roc_compliances', obj.roc_compliances, obj.lead_id);
                output += list_company('Alteration of Directors', 'alteration_of_directors', obj.alteration_of_directors, obj.lead_id);
                output += '</table>';
                output += '</div></div>';
                output += '</form>';
            return output;
     }

    // -------------------------------------------------------------------------
     this.get_audit_jobs_info = function (obj, grp) {
                var output = '';
                output += '<form action="#" method="post">';
                output += '<div class="col-lg-2"><div class="well well-lg no-padding">';
                output += '<table class="table table-condensed incorporation_tbl"><tr><th><u>Audit_Details</u></th>';
                    if(grp == 1)
                output += '<th><input type="checkbox" id="audit_jobs_edit"></i></th>';
                output += '</tr>';
                output += list_audit_jobs('Sales Tax Filing', 'sales_tax_filing', obj.sales_tax_filing, obj.lead_id);
                output += list_audit_jobs('Service Tax Filing', 'service_tax_filing', obj.service_tax_filing, obj.lead_id);
                output += list_audit_jobs('Prof. Tax Filing', 'prof_tax_filing', obj.prof_tax_filing, obj.lead_id);
                output += list_audit_jobs('TDS Filing', 'tds_filing', obj.tds_filing, obj.lead_id);
                output += list_audit_jobs('IT Filing', '    it_filing', obj.it_filing, obj.lead_id);
                output += list_audit_jobs('Consultation', 'ajb_consultation', obj.ajb_consultation, obj.lead_id);
                output += '</table>';
                output += '</div></div>';
                output += '</form>';
            return output;
     }

      // -------------------------------------------------------------------------
     this.get_ags_reg_jobs_info = function (obj, grp) {
                var output = '';
                output += '<form action="#" method="post">';
                output += '<div class="col-lg-2"><div class="well well-lg no-padding">';
                output += '<table class="table table-condensed incorporation_tbl"><tr><th><u>AGS_Reg_Details</u></th>';
                    if(grp == 1)
                output += '<th><input type="checkbox" id="ags_reg_jobs_edit"></i></th>';
                output += '</tr>';
                output += list_ags_reg_jobs('Sales Tax Reg.', 'sales_tax_registration', obj.sales_tax_registration, obj.lead_id);
                output += list_ags_reg_jobs('Service Tax Reg.', 'service_tax_registration', obj.service_tax_registration, obj.lead_id);
                output += list_ags_reg_jobs('Prof. Tax Reg.', 'prof_tax_registration', obj.prof_tax_registration, obj.lead_id);
                output += list_ags_reg_jobs('MSME Reg.', 'msme_registration', obj.msme_registration, obj.lead_id);
                output += list_ags_reg_jobs('Food License', '    food_license', obj.food_license, obj.lead_id);
                output += list_ags_reg_jobs('Fire License', '    fire_license', obj.fire_license, obj.lead_id);
                output += list_ags_reg_jobs('IE Code', 'ie_code', obj.ie_code, obj.lead_id);
                output += list_ags_reg_jobs('Lease Deed', 'lease_deed', obj.lease_deed, obj.lead_id);
                output += list_ags_reg_jobs('Partnership Deed', 'partnership_deed', obj.partnership_deed, obj.lead_id);
                output += '</table>';
                output += '</div></div>';
                output += '</form>';
            return output;
     }


      // -------------------------------------------------------------------------
     this.get_tech_jobs_info = function (obj, grp) {
                var output = '';
                output += '<form action="#" method="post">';
                output += '<div class="col-lg-2"><div class="well well-lg no-padding">';
                output += '<table class="table table-condensed incorporation_tbl"><tr><th><u>Tech_Jobs_Details</u></th>';
                    if(grp == 1)
                output += '<th><input type="checkbox" id="tech_jobs_edit"></i></th>';
                output += '</tr>';
                output += list_tech_jobs('Website', 'website', obj.website, obj.lead_id);
                output += list_tech_jobs('Mail', 'mail', obj.mail, obj.lead_id);
                output += list_tech_jobs('Logo', 'logo', obj.logo, obj.lead_id);
                output += list_tech_jobs('Letter Pad', 'letter_pad', obj.letter_pad, obj.lead_id);
                output += list_tech_jobs('Visiting Card', 'visiting_card', obj.visiting_card, obj.lead_id);
                output += list_tech_jobs('Consultation', 'tj_consultation', obj.tj_consultation, obj.lead_id);
                output += '</table>';
                output += '</div></div>';
                output += '</form>';
            return output;
     }

      // -------------------------------------------------------------------------
     this.get_legal_jobs_info = function (obj, grp) {
                var output = '';
                output += '<form action="#" method="post">';
                output += '<div class="col-lg-2"><div class="well well-lg no-padding">';
                output += '<table class="table table-condensed incorporation_tbl"><tr><th><u>AGS_Legal_Details</u></th>';
                    if(grp == 1)
                output += '<th><input type="checkbox" id="legal_jobs_edit"></i></th>';
                output += '</tr>';
                output += list_legal_jobs('TM Registration', 'trademark_registration', obj.trademark_registration, obj.lead_id);
                output += list_legal_jobs('TM Queries Reply', '  trademark_queries_reply', obj.trademark_queries_reply, obj.lead_id);
                output += list_legal_jobs('Copyright', 'copyright', obj.copyright, obj.lead_id);
                output += list_legal_jobs('Patent Right', 'patent_right', obj.patent_right, obj.lead_id);
                output += list_legal_jobs('Consultation', 'alj_consultation', obj.alj_consultation, obj.lead_id);
                output += '</table>';
                output += '</div></div>';
                output += '</form>';
            return output;
     }


    // ------------------------------------------------------------------------
    
    this.article = function(obj) {
    	var date = new Date(obj.date);
        var output = '';
        output += '<tr><td>'+ obj.key_name +'</td>';
        output += '<td>'+ obj.key_username +'</td>';
        output += '<td>'+ atob(obj.key_password) +'</td>';
        output+= '<td>'+ obj.key_description +'</td></tr>';
        return output;
    };
    
    // ------------------------------------------------------------------------
    
    this.note = function(obj) {
        var output = '';
        output += '<div id="note_'+ obj.note_id +'">';
        output += '<span>' + obj.title + '</span>';
        output += '<span>' + obj.content + '</span>';
        output += '</div>';
        return output;
    };
    
    // ------------------------------------------------------------------------
    
    function formatDate(d)
    {
        var month = d.getMonth();
        var day = d.getDate();
        month = month + 1;

        month = month + "";

        if (month.length == 1)
        {
            month = "0" + month;
        }

        day = day + "";

        if (day.length == 1)
        {
            day = "0" + day;
        }

        return month + '-' + day + '-' + d.getFullYear();
    }
    this.__construct();
    
};
