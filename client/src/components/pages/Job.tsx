import React, { useEffect, useState } from 'react';
import { fetchContent } from '../../services/api';


 
const Jobs = () => {
  const [content, setContent] = useState(null);
  const [error, setError] = useState(null);
 
  useEffect(() => {
    fetchContent('node/jobs')
      .then((data) => setContent(data))
      .catch((err) => setError(err));
  }, []);
 
  if (error) {
    return <div>Error loading content: {error.message}</div>;
  }
 
  if (!content) {
    return <div>Loading...</div>;
  }
  // Access the first item in the data array
  const titleValue = content?.data?.[0]?.attributes?.title;
  const bodyValue = content?.data?.[0]?.attributes?.body?.value;

  const titleValue2 = content?.data?.[1]?.attributes?.title;
  const bodyValue2 = content?.data?.[1]?.attributes?.body?.value;

 
  return (
    <>
    <div style={{backgroundColor:"orange", margin:"2rem", border:"2px solid black", borderRadius:"5px"}}>
      
      {titleValue ? (
        <h1 style={{marginBottom:"2rem"}}>
        <div dangerouslySetInnerHTML={{ __html: titleValue }} />
        </h1>
      ) : (
        <div>No content available</div>
      )}
      <div>
      {bodyValue ? (
        <div dangerouslySetInnerHTML={{ __html: bodyValue }} />
      ) : (
        <div>No content available</div>
      )}
    </div>
    </div>

    <div style={{backgroundColor:"yellow", margin:"2rem", border:"2px solid black", borderRadius:"5px", display:"flex", alignItems:"center", justifyContent:"center", flexDirection:"column"}}>
      
      {titleValue2 ? (
        <h1 style={{marginBottom:"2rem"}}>
        <div dangerouslySetInnerHTML={{ __html: titleValue2 }} />
        </h1>
      ) : (
        <div>No content available</div>
      )}
      <div>
      {bodyValue2 ? (
        <div dangerouslySetInnerHTML={{ __html: bodyValue2 }} />
      ) : (
        <div>No content available</div>
      )}
    </div>
    </div>
    </>
  );
};
 
export default Jobs;