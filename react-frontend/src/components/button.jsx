function button(){
    const handleClick = () => {
        alert('Button clicked!');
    }
    return(
        <> 
        <button onClick={handleClick}>Click me</button>
        </>
    )
}
export default button;