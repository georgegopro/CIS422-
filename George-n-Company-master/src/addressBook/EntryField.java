package addressBook;

public class EntryField {
	private String InfoType;
	private String Info;
	
	public EntryField(String type, String info){
		setInfoType(type);
		setInfo(info);
	}
	
	public int isAddress(String addr){
		
		return -1;
	}
	
	public String getInfoType(){
		return this.InfoType;
	}
	
	public String getInfo(){
		return this.Info;
	}
	
	public void setInfoType(String type){
		this.InfoType = type;
	}
	
	public void setInfo(String info){
		this.Info = info;
	}
}
