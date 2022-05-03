package com.BackEndProJect.BackEndProJect.service;

import java.util.List;
import java.util.Optional;

import org.apache.logging.log4j.LogManager;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
import org.apache.logging.log4j.LogManager;
import org.apache.logging.log4j.Logger;
import com.BackEndProJect.BackEndProJect.model.CommentModel;
import com.BackEndProJect.BackEndProJect.model.EventModel;

import com.BackEndProJect.BackEndProJect.model.LoingModel;
import com.BackEndProJect.BackEndProJect.model.PEventModel;
import com.BackEndProJect.BackEndProJect.model.ProvinceModel;
import com.BackEndProJect.BackEndProJect.model.QrEventModel;
import com.BackEndProJect.BackEndProJect.model.UserModel;
import com.BackEndProJect.BackEndProJect.repository.CommentRepository;
import com.BackEndProJect.BackEndProJect.repository.EventRepository;
import com.BackEndProJect.BackEndProJect.repository.PEventRepository;
import com.BackEndProJect.BackEndProJect.repository.ProvinceRepository;
import com.BackEndProJect.BackEndProJect.repository.QrEventRepository;
import com.BackEndProJect.BackEndProJect.repository.UserRepository;



@Service
public class serviceImp implements service {
	
	private final Logger logger = LogManager.getLogger(this.getClass());
	
	@Autowired
	private UserRepository userRepository;
	
	@Autowired
	private EventRepository eventRepository;

	@Autowired
	private CommentRepository commentRepository;
	
	@Autowired
	private QrEventRepository qrEventRepository;
	
	@Autowired
	private PEventRepository pEventRepository;
	
	@Autowired
	private ProvinceRepository provinceRepository;
	

	
	
	@Override
	public List<UserModel> showuser() {
		// TODO Auto-generated method stub
		return userRepository.findAll();
	}

	@Override
	public List<EventModel> showevent() {
		// TODO Auto-generated method stub
		return eventRepository.findAll();
	}

	@Override
	public List<CommentModel> showcomment() {
		// TODO Auto-generated method stub
		return commentRepository.findAll();
	}

	@Override
	public List<QrEventModel> showqrcode() {
		// TODO Auto-generated method stub
		return qrEventRepository.findAll();
	}

	@Override
	public List<PEventModel> showpevent() {
		// TODO Auto-generated method stub
		return pEventRepository.findAll();
	}

	@Override
	public List<ProvinceModel> showprovince() {
		// TODO Auto-generated method stub
		return provinceRepository.findAll();
	}

	

	@Override
	public void insert(EventModel eventid) {

		eventRepository.save(eventid);
		
	}

	@Override
	public List<UserModel> loig(UserModel Data) {
		// TODO Auto-generated method stub

		return userRepository.fintByUser(Data.getUsername() , Data.getPassword());
		
	}

	@Override
	public List<EventModel> eventid(int Data) {
		// TODO Auto-generated method stub
		return eventRepository.findAll();
	}

	@Override
	public void insertQrid(QrEventModel Qrid) {
	 	qrEventRepository.save(Qrid);
		
	}

	@Override
	public List<QrEventModel> getqr(QrEventModel DataQr) {
		// TODO Auto-generated method stub
		logger.info("user {} {}",DataQr.getUserid().getUser_ID(),DataQr.getEventid().getEvent_id());
	return 	 qrEventRepository.fintByQrCode(DataQr.getUserid().getUser_ID(),DataQr.getEventid().getEvent_id());	
	}

	@Override
	public List<QrEventModel> updateQr(QrEventModel DataQr) {
		
	QrEventModel data = qrEventRepository.getOne(DataQr.getQrcode_ID());
	logger.info("data {} ",data.getQrcode_ID());
	
	data.setQrcodepath(DataQr.getQrcodepath());
	qrEventRepository.save(data);
	return null;
	}


	

	




	
	

}
