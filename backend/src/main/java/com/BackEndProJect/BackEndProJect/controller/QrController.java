package com.BackEndProJect.BackEndProJect.controller;


import java.util.List;

import javax.websocket.server.PathParam;

import org.apache.logging.log4j.LogManager;
import org.apache.logging.log4j.Logger;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.data.repository.query.Param;
import org.springframework.http.HttpStatus;
import org.springframework.http.MediaType;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;

import org.springframework.web.bind.annotation.RestController;


import com.BackEndProJect.BackEndProJect.model.CommentModel;
import com.BackEndProJect.BackEndProJect.model.EventModel;

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
	public List<UserModel> showuser() {

		return service.showuser();
	}

	@GetMapping("/showevent")
	public List<EventModel> showevent() {
		return service.showevent();
	}

	@GetMapping("/showcomment")
	public List<CommentModel> showcomment() {

		return service.showcomment();
	}

	@GetMapping("/showqrcode")
	public List<QrEventModel> showqrcode() {
		return service.showqrcode();
	}

	@GetMapping("/showpevent")
	public List<PEventModel> showpevent() {

		return service.showpevent();
	}

	@GetMapping("/showprovince")
	public List<ProvinceModel> showprovince() {

		return service.showprovince();
	}

	@PostMapping("/insertevent")
	public void insertevenr(@RequestBody EventModel eventid) {

		service.insert(eventid);
	}

	@PostMapping("/insertcomment") 
	public void insertevenr(@RequestBody CommentModel datacomment) {
		service.insertComment(datacomment);

	}

	@PostMapping("/insertUser")
	public void insertUser(@RequestBody UserModel datauser) {
		service.insertUser(datauser);
	}

	@PostMapping("/loing")
	public ResponseEntity<List<UserModel>> loing(@RequestBody UserModel Data) {
		logger.info(Data.getUsername());
		Data.getUsername();
		Data.getPassword();

		return new ResponseEntity<>(service.loig(Data), HttpStatus.OK);

	}

	@PostMapping("/insertQRCode")
	public void insertQRCode(@RequestBody QrEventModel Qrid) {
		// logger.info(Qrid);
		service.insertQrid(Qrid);

	}

	@PostMapping("/showgetqr")
	public ResponseEntity<List<QrEventModel>> getqr(@RequestBody QrEventModel DataQr) {

		return new ResponseEntity<>(service.getqr(DataQr), HttpStatus.OK);
	}

	@PostMapping("/UpDateQR")
	public ResponseEntity<List<QrEventModel>> updateQr(@RequestBody QrEventModel DataQr) {

		service.updateQr(DataQr);
		return null;
		// return new ResponseEntity<>(service.getqr(DataQr),HttpStatus.OK);
	}

	@PostMapping("/updateImgEvent")
	public ResponseEntity<List<EventModel>> updateImgEvent(@RequestBody EventModel DataEvent) {
		service.updateImgEvent(DataEvent);
		return null;
	}

	@PostMapping("/UpimgUser")
	public ResponseEntity<List<UserModel>> updateimguser(@RequestBody UserModel PathimgUser) {

		service.updateProfile(PathimgUser);
		return null;
		// return new ResponseEntity<>(service.getqr(DataQr),HttpStatus.OK);
	}

	@PostMapping("/deleteevent")
	public ResponseEntity<List<EventModel>> deleteEvent(@RequestBody EventModel idevent) {

		service.deleteEvent(idevent);
		return null;

	}

	@PostMapping("/deleteuser")
	public ResponseEntity<List<UserModel>> deleteuser(@RequestBody UserModel iduser) {

		service.deleteuser(iduser);
		return null;

	}

	@PostMapping("/qreventstatusedit")
	public ResponseEntity<List<QrEventModel>> qreventstatusedit(@RequestBody QrEventModel iduser) {

		service.editstatusqrevent(iduser);
		return null;

	}

	@PostMapping("/getqridqrcode")
	public ResponseEntity<List<QrEventModel>> getidqrcode(@RequestBody QrEventModel iduser) {
		logger.info(iduser.getQrcode_ID());
		return new ResponseEntity<>(service.getidqrcode(iduser), HttpStatus.OK);
	}
	@PostMapping("/getEventID")
	public ResponseEntity<List<EventModel>> getEventID(@RequestBody EventModel iduser) {
		logger.info(iduser.getEvent_id());
		return new ResponseEntity<>(service.getEventByid(iduser), HttpStatus.OK);
	}
	@GetMapping("/getserver")
	public String getserver() {
		
		return "hello Diw";
	}


	// @PostMapping("/insertimgUser")
	// public imgModel insertimgUser(@RequestBody imgModel base64){
	// service.insertimageuser(base64);
	// return base64;
	// }

	// @PostMapping("/deleteuser")
	// public String saveImageProfile(@ModelAttribute(name = "imgprofile")Brand
	// Brand,
	// RedirectAttributes ra,
	// @RequestParam("fileimage")MultipartFile ) throw IOException{
	// return null;
	// }

	// @PostMapping("/users/save")
	// public RedirectView saveUser(User user,
	// @RequestParam("image") MultipartFile multipartFile) throws IOException {

	// String fileName = StringUtils.cleanPath(multipartFile.getOriginalFilename());
	// user.setPhotos(fileName);

	// User savedUser = repo.save(user);

	// String uploadDir = "user-photos/" + savedUser.getId();

	// FileUploadUtil.saveFile(uploadDir, fileName, multipartFile);

	// return new RedirectView("/users", true);
	// }

}
