package com.BackEndProJect.BackEndProJect.controller;

import java.util.List;

import org.apache.logging.log4j.LogManager;
import org.apache.logging.log4j.Logger;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.boot.autoconfigure.security.SecurityProperties.User;
import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;
import com.BackEndProJect.BackEndProJect.model.CommentModel;
import com.BackEndProJect.BackEndProJect.model.EventModel;
import com.BackEndProJect.BackEndProJect.model.LoingModel;
import com.BackEndProJect.BackEndProJect.model.PEventModel;
import com.BackEndProJect.BackEndProJect.model.ProvinceModel;
import com.BackEndProJect.BackEndProJect.model.QrEventModel;
import com.BackEndProJect.BackEndProJect.model.UserModel;
import com.BackEndProJect.BackEndProJect.service.service;


@RestController
@RequestMapping("/Qr_project")
public class QrController {

	private final Logger logger = LogManager.getLogger(this.getClass());
	
	@Autowired
	private service service;
	
	@GetMapping("/showuser")
	public List<UserModel> showuser(){
		
		return service.showuser();
	}
	
	
	@GetMapping("/showevent")
	public List<EventModel> showevent(){
		return service.showevent();
	}
	
	
	@GetMapping("/showcomment")
	public List<CommentModel> showcomment(){
		
		return service.showcomment();
	}
	
	@GetMapping("/showqrcode")
	public List<QrEventModel> showqrcode(){
		return service.showqrcode();
	}
	
	
	@GetMapping("/showpevent")
	public List<PEventModel> showpevent(){
		
		return service.showpevent();
	}
	
	
	@GetMapping("/showprovince")
	public List<ProvinceModel> showprovince(){
		
		return service.showprovince();
	}
	
	@PostMapping("/insertevent")
	public void insertevenr(@RequestBody EventModel eventid) {
		
		service.insert(eventid);
	}
	
	@PostMapping("/loing")
	public ResponseEntity<List<UserModel>> loing(@RequestBody UserModel Data) {
		logger.info(Data.getUsername());
		Data.getUsername();
		Data.getPassword();
		
		return new ResponseEntity<>(service.loig(Data),HttpStatus.OK);
		
	}
	
	@PostMapping("/insertQRCode")
	public void insertQRCode(@RequestBody QrEventModel Qrid) {
//		logger.info(Qrid);
		service.insertQrid(Qrid);
		
	}
	
	@PostMapping("/showgetqr")
	public ResponseEntity<List<QrEventModel>> getqr(@RequestBody QrEventModel DataQr){
	
		
		
		return new ResponseEntity<>(service.getqr(DataQr),HttpStatus.OK);
		
		
	}
		
	@PostMapping("/UpDateQR")
	public ResponseEntity<List<QrEventModel>> updateQr(@RequestBody QrEventModel DataQr){
	
		
	 service.updateQr(DataQr);
	 return null;
//		return new ResponseEntity<>(service.getqr(DataQr),HttpStatus.OK);
		
		
	}
}
