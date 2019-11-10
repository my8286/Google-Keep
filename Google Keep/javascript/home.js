// To open or close side menubar 
function openNav() {
    document.getElementById("mySidebar").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
  }
  
  function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
  }
  
  function menuBar()
  {
    if(document.getElementById("mySidebar").style.width == "250px" && document.getElementById("main").style.marginLeft == "250px")
        closeNav();
    else
        openNav();
  }
//   To perform hide or unhide notes tag
  function note()
  {
    var x = document.getElementById('input-note');
    var y = document.getElementById('input-note-second');
    if (x.style.display === 'none') {
      x.style.display = 'block';
      y.style.display= 'none';
    } else {
      x.style.display = 'none';
      y.style.display ='block';
    }
      
  }
//   To add new notes in pinned or other section
  function addRow() {
    const div = document.createElement('div');
  
    div.className = 'row';
    var title = document.getElementById('title').textContent;
    var description = document.getElementById('description').textContent;
    if((title==="" && description==="") || (title==="Title" && description===" "))
    {}
    else
    {
        if(document.getElementById("pin").style.display == "none")
        {
          div.innerHTML = `
          <div class="pinned border" draggable="true">
            <div></div>
            <div style="width:100%;overflow: auto;">`+title+`</div>
            <div style="width:100%;height:auto;overflow: auto;"><p>`+description+`</p></div>
          </div>
        `;
          document.getElementById('pinned').appendChild(div);
        }
        else
        {
          div.innerHTML = `
          <div class="pinned border" draggable="true">
            <div></div>
            <div><p>`+title+`</p></div>
            <div style="width:100%;height:auto"><p>`+description+`</p></div>
          </div>
        `;
          document.getElementById('other').appendChild(div);
        }
    }
    document.getElementById("title").innerHTML = ""; 
    document.getElementById("description").innerHTML = ""; 
    document.getElementById('input-note-second').style.display ='none';
    document.getElementById('input-note').style.display ='block';
  }

//   for pin or unpin icon
  function callPin(val)
  {
    
    if(val==0)
      {
        document.getElementById("pin").style.display = "none";
        document.getElementById("unpin").style.display = "block";
      }
    else
      {
        document.getElementById("pin").style.display = "block";
        document.getElementById("unpin").style.display = "none";
      }
  }