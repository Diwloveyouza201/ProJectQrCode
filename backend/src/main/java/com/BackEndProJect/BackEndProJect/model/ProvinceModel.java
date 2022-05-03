package com.BackEndProJect.BackEndProJect.model;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.Table;

@Entity
@Table(name="p_province")
public class ProvinceModel {

	@Id
	@GeneratedValue(strategy = GenerationType.IDENTITY)
	private int Province_ID;
	
	@Column(name="Province_Code")
	private String provincecode;
	
	@Column(name="Province_Name")
	private String provincename;

	public int getProvince_ID() {
		return Province_ID;
	}

	public void setProvince_ID(int province_ID) {
		Province_ID = province_ID;
	}

	public String getProvincecode() {
		return provincecode;
	}

	public void setProvincecode(String provincecode) {
		this.provincecode = provincecode;
	}

	public String getProvincename() {
		return provincename;
	}

	public void setProvincename(String provincename) {
		this.provincename = provincename;
	}

	public ProvinceModel(int province_ID, String provincecode, String provincename) {
		super();
		Province_ID = province_ID;
		this.provincecode = provincecode;
		this.provincename = provincename;
	}

	public ProvinceModel() {
		super();
	}
	
	
	
}
