$(document).ready(function(){console.log("READY");$("body").scrollspy({target:"#navbar"});$('[data-spy="scroll"]').on("activate.bs.scrollspy",function(){console.log("SCROLL")})})