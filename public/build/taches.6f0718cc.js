(window.webpackJsonp=window.webpackJsonp||[]).push([["taches"],{"/87M":function(e,t,n){(function(e){e((function(){document.getElementById("container-loader").classList.add("invisible");for(var t=document.getElementsByClassName("edit-stains"),n=0;n<t.length;n++)t[n].addEventListener("click",d);for(var i=document.getElementsByClassName("remove-stains"),a=0;a<i.length;a++)i[a].addEventListener("click",s);function d(){var t=this.getAttribute("data-id"),n=this.getAttribute("data-label"),i="/taches/"+t+"/edition";e("#modal-edit").modal("show"),e.ajax(i).done((function(e){var t="Edition de la tâche "+n;""===n&&(t="Ajouter une tâche"),document.getElementById("modal-edit-label").text=t,document.getElementById("modal-body").innerHTML=e}))}function s(){var t=this.getAttribute("data-id"),n="/taches/"+t+"/suppression";document.getElementById("container-loader").classList.toggle("invisible"),e.ajax({url:n,type:"DELETE",success:function(e){e&&(document.getElementById("row-"+t).remove(),document.getElementById("container-loader").classList.toggle("invisible"))}})}document.getElementById("save").addEventListener("click",(function(){document.getElementById("container-loader").classList.toggle("invisible"),document.getElementsByName("stains")[0].submit()}))}))}).call(this,n("EVdn"))}},[["/87M","runtime",0]]]);