import axios from 'axios';
import { Button } from 'bootstrap';
import React from 'react';
import ReactDOM from 'react-dom';
import Swal from 'sweetalert2';
function Delete(props) {

    const destroy = (e)=>{
        
        const afterDeleted = e.currentTarget
        Swal.fire({
            title: 'Are you sure?',
            text: "Data yang dihapus tidak akan kembali loh !",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                
                axios.delete(props.endpoint).then((response)=>{
                    location.reload()
                },
                
              
                )
                Swal.fire(
                    'Deleted!',
                    'Data berhasil di delete.',
                    'success'
                  )
            }
        });
        
              
        
    }

    return (
        <button onClick={destroy} className="btn btn-sm btn-danger">Delete</button>
    );
}

export default Delete;

if (document.querySelectorAll('.delete')) {
    const deleteNodes = document.querySelectorAll('.delete')
    deleteNodes.forEach((item)=>{

        ReactDOM.render(<Delete endpoint={item.getAttribute('endpoint')} />, item);
    })
}
