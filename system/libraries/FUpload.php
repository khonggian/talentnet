<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
class CI_FUpload {
	public $file					= 0;
	public $file_name			 	= "";
	public $max_size				= 0;
	public $max_width				= 0;
	public $max_height				= 0;
	public $allowed_types			= "";
	public $file_size				= "";
	public $is_image				= FALSE;
	public $upload_path				= "";
	public $upload_folder_now		= "";
	public $image_width				= "";
	public $image_height			= "";
	public $error_msg				= array();
	public $ext						= "";
	
	public function __construct($props = array())
	{
		if (count($props) > 0)
		{
			$this->initialize($props);
		}

		log_message('debug', "Upload Class Initialized");
	}

	public function initialize($config = array())
	{
		$defaults = array(
							'max_size'				=> 0,
							'max_width'				=> 0,
							'max_height'			=> 0,
							'allowed_types'			=> "",
							'upload_path'			=> "",
							'upload_folder_now'		=> "",
							'overwrite'				=> FALSE,
							'is_image'				=> FALSE,
							'error_msg'				=> array()
					);

		foreach ($defaults as $key => $val)
		{
			if (isset($config[$key]))
			{
				$method = 'set_'.$key;
				if (method_exists($this, $method))
				{
					$this->$method($config[$key]);
				}
				else
				{
					$this->$key = $config[$key];
				}
			}
			else
			{
				$this->$key = $val;
			}
		}
	}
	
	function do_upload($file= ''){
		if ( ! isset($file)){
			$this->set_error('ERROR', 'Bạn chưa chọn file');
			return FALSE;
		}
	
		$this->file= $file;
		$this->file_ext = strtolower(array_pop( explode( '.', $file['name'])));
		$this->file_size = $file['size'];
		if(!$this->is_allowed_filetype()){
			return $this->display_errors();
		}
		
		if(!$this->is_allowed_mime()){
			//return $this->display_errors();
		}
        
		if(!$this->is_allowed_filesize()){
			return $this->display_errors();
		}
		
		if(!$this->is_allowed_dimensions()){
			return $this->display_errors();
		}		
		
		if(!$this->validate_upload_path()){
			return $this->display_errors();
		}
		
		$this->file_name = md5(uniqid(mt_rand())) . '_' . time() . '.'.$this->file_ext;

		if ( ! @move_uploaded_file($this->file['tmp_name'], $this->upload_path.$this->file_name))
		{
			$this->set_error('st', 'ERROR');
			$this->set_error('message', 'Upload thất bại');
		}
		else
		{
			return $this->data();		
		}
		return $this->display_errors();
	}	
	
	public function data()
	{
		return array_to_object(array (
						'st'				=> 'SUCCESS',
						'message'			=> 'Upload thành công',
						'file_path'			=> $this->upload_folder_now . $this->file_name,
						'full_path'			=> $this->upload_path.$this->file_name,
						'file_ext'			=> $this->file_ext,
						'file_size'			=> $this->file_size,
						'is_image'			=> $this->is_image,
						'image_width'		=> $this->image_width,
						'image_height'		=> $this->image_height
					));
	}	
	
	public function set_allowed_types($types)
	{
		if ( ! is_array($types) && $types == '*')
		{
			$this->allowed_types = '*';
			return;
		}
		$this->allowed_types = explode('|', $types);
	}	
	
	public function is_allowed_filetype($file= 'file', $ignore_mime = FALSE)
	{
		if ($this->allowed_types == '*'){
			return TRUE;
		}

		if ( ! in_array($this->file_ext, $this->allowed_types))
		{	
			$this->set_error('st', 'ERROR');
			$this->set_error('message', 'Định dạng không hổ trợ');
			return FALSE;
		}
		
		return TRUE;
	}
	
	public function is_allowed_mime($debug= FALSE){
		$error= FALSE;
		$mime_types = array(
			'ai'      => 'application/postscript',
			'aif'     => 'audio/x-aiff',
			'aifc'    => 'audio/x-aiff',
			'aiff'    => 'audio/x-aiff',
			'asc'     => 'text/plain',
			'asf'     => 'video/x-ms-asf',
			'asx'     => 'video/x-ms-asf',
			'au'      => 'audio/basic',
			'avi'     => 'video/x-msvideo',
			'bcpio'   => 'application/x-bcpio',
			'bin'     => 'application/octet-stream',
			'bmp'     => 'image/bmp',
			'bz2'     => 'application/x-bzip2',
			'cdf'     => 'application/x-netcdf',
			'chrt'    => 'application/x-kchart',
			'class'   => 'application/octet-stream',
			'cpio'    => 'application/x-cpio',
			'cpt'     => 'application/mac-compactpro',
			'csh'     => 'application/x-csh',
			'css'     => 'text/css',
			'dcr'     => 'application/x-director',
			'dir'     => 'application/x-director',
			'djv'     => 'image/vnd.djvu',
			'djvu'    => 'image/vnd.djvu',
			'dll'     => 'application/octet-stream',
			'dms'     => 'application/octet-stream',
			'doc'     => 'application/msword',
            'docx'	  => array('application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/zip'),
			'dvi'     => 'application/x-dvi',
			'dxr'     => 'application/x-director',
			'eps'     => 'application/postscript',
			'etx'     => 'text/x-setext',
			'exe'     => 'application/octet-stream',
			'ez'      => 'application/andrew-inset',
			'flv'     => 'video/x-flv',
			'gif'     => 'image/gif',
			'gtar'    => 'application/x-gtar',
			'gz'      => 'application/x-gzip',
			'hdf'     => 'application/x-hdf',
			'hqx'     => 'application/mac-binhex40',
			'htm'     => 'text/html',
			'html'    => 'text/html',
			'ice'     => 'x-conference/x-cooltalk',
			'ief'     => 'image/ief',
			'iges'    => 'model/iges',
			'igs'     => 'model/iges',
			'img'     => 'application/octet-stream',
			'iso'     => 'application/octet-stream',
			'jad'     => 'text/vnd.sun.j2me.app-descriptor',
			'jar'     => 'application/x-java-archive',
			'jnlp'    => 'application/x-java-jnlp-file',
			'jpe'     => 'image/jpeg',
			'jpeg'    => 'image/jpeg',
			'jpg'     => 'image/jpeg',
			'js'      => 'application/x-javascript',
			'kar'     => 'audio/midi',
			'kil'     => 'application/x-killustrator',
			'kpr'     => 'application/x-kpresenter',
			'kpt'     => 'application/x-kpresenter',
			'ksp'     => 'application/x-kspread',
			'kwd'     => 'application/x-kword',
			'kwt'     => 'application/x-kword',
			'latex'   => 'application/x-latex',
			'lha'     => 'application/octet-stream',
			'lzh'     => 'application/octet-stream',
			'm3u'     => 'audio/x-mpegurl',
			'man'     => 'application/x-troff-man',
			'me'      => 'application/x-troff-me',
			'mesh'    => 'model/mesh',
			'mid'     => 'audio/midi',
			'midi'    => 'audio/midi',
			'mif'     => 'application/vnd.mif',
			'mov'     => 'video/quicktime',
			'movie'   => 'video/x-sgi-movie',
			'mp2'     => 'audio/mpeg',
			'mp3'     => 'audio/mpeg',
			'mpe'     => 'video/mpeg',
			'mpeg'    => 'video/mpeg',
			'mpg'     => 'video/mpeg',
			'mpga'    => 'audio/mpeg',
			'ms'      => 'application/x-troff-ms',
			'msh'     => 'model/mesh',
			'mxu'     => 'video/vnd.mpegurl',
			'nc'      => 'application/x-netcdf',
			'odb'     => 'application/vnd.oasis.opendocument.database',
			'odc'     => 'application/vnd.oasis.opendocument.chart',
			'odf'     => 'application/vnd.oasis.opendocument.formula',
			'odg'     => 'application/vnd.oasis.opendocument.graphics',
			'odi'     => 'application/vnd.oasis.opendocument.image',
			'odm'     => 'application/vnd.oasis.opendocument.text-master',
			'odp'     => 'application/vnd.oasis.opendocument.presentation',
			'ods'     => 'application/vnd.oasis.opendocument.spreadsheet',
			'odt'     => 'application/vnd.oasis.opendocument.text',
			'ogg'     => 'application/ogg',
			'otg'     => 'application/vnd.oasis.opendocument.graphics-template',
			'oth'     => 'application/vnd.oasis.opendocument.text-web',
			'otp'     => 'application/vnd.oasis.opendocument.presentation-template',
			'ots'     => 'application/vnd.oasis.opendocument.spreadsheet-template',
			'ott'     => 'application/vnd.oasis.opendocument.text-template',
			'pbm'     => 'image/x-portable-bitmap',
			'pdb'     => 'chemical/x-pdb',
			'pdf'     => 'application/pdf',
			'pgm'     => 'image/x-portable-graymap',
			'pgn'     => 'application/x-chess-pgn',
			'png'     => 'image/png',
			'pnm'     => 'image/x-portable-anymap',
			'ppm'     => 'image/x-portable-pixmap',
			'ppt'     => 'application/vnd.ms-powerpoint',
			'ps'      => 'application/postscript',
			'qt'      => 'video/quicktime',
			'ra'      => 'audio/x-realaudio',
			'ram'     => 'audio/x-pn-realaudio',
			'ras'     => 'image/x-cmu-raster',
			'rgb'     => 'image/x-rgb',
			'rm'      => 'audio/x-pn-realaudio',
			'roff'    => 'application/x-troff',
			'rpm'     => 'application/x-rpm',
			'rtf'     => 'text/rtf',
			'rtx'     => 'text/richtext',
			'sgm'     => 'text/sgml',
			'sgml'    => 'text/sgml',
			'sh'      => 'application/x-sh',
			'shar'    => 'application/x-shar',
			'silo'    => 'model/mesh',
			'sis'     => 'application/vnd.symbian.install',
			'sit'     => 'application/x-stuffit',
			'skd'     => 'application/x-koan',
			'skm'     => 'application/x-koan',
			'skp'     => 'application/x-koan',
			'skt'     => 'application/x-koan',
			'smi'     => 'application/smil',
			'smil'    => 'application/smil',
			'snd'     => 'audio/basic',
			'so'      => 'application/octet-stream',
			'spl'     => 'application/x-futuresplash',
			'src'     => 'application/x-wais-source',
			'stc'     => 'application/vnd.sun.xml.calc.template',
			'std'     => 'application/vnd.sun.xml.draw.template',
			'sti'     => 'application/vnd.sun.xml.impress.template',
			'stw'     => 'application/vnd.sun.xml.writer.template',
			'sv4cpio' => 'application/x-sv4cpio',
			'sv4crc'  => 'application/x-sv4crc',
			'swf'     => 'application/x-shockwave-flash',
			'sxc'     => 'application/vnd.sun.xml.calc',
			'sxd'     => 'application/vnd.sun.xml.draw',
			'sxg'     => 'application/vnd.sun.xml.writer.global',
			'sxi'     => 'application/vnd.sun.xml.impress',
			'sxm'     => 'application/vnd.sun.xml.math',
			'sxw'     => 'application/vnd.sun.xml.writer',
			't'       => 'application/x-troff',
			'tar'     => 'application/x-tar',
			'tcl'     => 'application/x-tcl',
			'tex'     => 'application/x-tex',
			'texi'    => 'application/x-texinfo',
			'texinfo' => 'application/x-texinfo',
			'tgz'     => 'application/x-gzip',
			'tif'     => 'image/tiff',
			'tiff'    => 'image/tiff',
			'torrent' => 'application/x-bittorrent',
			'tr'      => 'application/x-troff',
			'tsv'     => 'text/tab-separated-values',
			'txt'     => 'text/plain',
			'ustar'   => 'application/x-ustar',
			'vcd'     => 'application/x-cdlink',
			'vrml'    => 'model/vrml',
			'wav'     => 'audio/x-wav',
			'wax'     => 'audio/x-ms-wax',
			'wbmp'    => 'image/vnd.wap.wbmp',
			'wbxml'   => 'application/vnd.wap.wbxml',
			'wm'      => 'video/x-ms-wm',
			'wma'     => 'audio/x-ms-wma',
			'wml'     => 'text/vnd.wap.wml',
			'wmlc'    => 'application/vnd.wap.wmlc',
			'wmls'    => 'text/vnd.wap.wmlscript',
			'wmlsc'   => 'application/vnd.wap.wmlscriptc',
			'wmv'     => 'video/x-ms-wmv',
			'wmx'     => 'video/x-ms-wmx',
			'wrl'     => 'model/vrml',
			'wvx'     => 'video/x-ms-wvx',
			'xbm'     => 'image/x-xbitmap',
			'xht'     => 'application/xhtml+xml',
			'xhtml'   => 'application/xhtml+xml',
			'xls'     => 'application/vnd.ms-excel',
			'xml'     => 'text/xml',
			'xpm'     => 'image/x-xpixmap',
			'xsl'     => 'text/xml',
			'xwd'     => 'image/x-xwindowdump',
			'xyz'     => 'chemical/x-xyz',
			'zip'     => 'application/zip',
			'doc'	  => 'application/msword',
			'docx'	  => 'application/msword',
			'ppt'	  => 'application/vnd.ms-powerpoint',
			'pptx'	  => 'application/vnd.ms-powerpoint',
			'xls'	  => 'application/vnd.ms-excel',
			'xlsx'	  => 'application/vnd.ms-excel',
			'php'	  => 'text/x-php'
		);	
		
		if ( function_exists( 'finfo_open' ) && function_exists( 'finfo_file' ) && function_exists( 'finfo_close' ) ) {
			$fileinfo = finfo_open( FILEINFO_MIME );
			$mime_type = finfo_file( $fileinfo, $this->file['tmp_name'] );
			finfo_close( $fileinfo );
			
			if ( ! empty( $mime_type ) ) {
				if ( true === $debug )
					return array( 'mime_type' => $mime_type, 'method' => 'fileinfo' );
				$orginal_mime_type= $mime_types[$this->file_ext];

				$orginal_mime_type= $mime_types[$this->file_ext];
				$pos = strpos($mime_type, ';');
				$mime_type= substr($mime_type, 0, $pos);	
				if($orginal_mime_type != $mime_type) {
					$error= TRUE;
				}
			}
		}
		if ( function_exists( 'mime_content_type' ) ) {
				
			$mime_type = mime_content_type( $this->file['tmp_name'] );
			
			if ( ! empty( $mime_type ) ) {
				if ( true === $debug )
					return array( 'mime_type' => $mime_type, 'method' => 'mime_content_type' );
				$orginal_mime_type= $mime_types[$this->file_ext];
				$pos = strpos($mime_type, ';');
				$mine_type= substr($mime_type, 0, $pos);				
				if($orginal_mime_type != $mime_type) {
					$error= TRUE;
				}			
			}
		}
				
		
		if ( ! empty( $mime_types[$this->file_ext] ) ) {
			if ( true === $debug )
				return array( 'mime_type' => $mime_types[$this->file_ext], 'method' => 'from_array' );
			// Images get some additional checks
			$image_types = array('gif', 'jpg', 'jpeg', 'png', 'jpe');
			if (in_array($this->file_ext, $image_types))
			{
				if (FALSE !== ($D = @getimagesize($this->file['tmp_name'])))
				{
					$this->image_width		= $D['0'];
					$this->image_height		= $D['1'];
					$this->is_image			= TRUE;
				}
				else
				{
					$error= TRUE;
				}
			}				
		}

		if($error == TRUE){
			$this->set_error('st', 'ERROR');
			$this->set_error('message', 'Nội dung file không hợp lệ');
			return FALSE;
		}else{
			return TRUE;
		}
		
		// if ( true === $debug )
			// return array( 'mime_type' => 'application/octet-stream', 'method' => 'last_resort' );
		//return 'application/octet-stream';
	
	}
	
	public function set_max_size($n)
	{
		$this->max_size = ((int) $n < 0) ? 0: (int) $n * 1048576;//CONVERT TO MB
	}
	
	public function is_allowed_filesize()
	{
		if ($this->max_size != 0  AND  $this->file_size > $this->max_size)
		{
			$this->set_error('st', 'ERROR');
			$this->set_error('message', 'Kích thước file không hợp lệ');		
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}	

	public function is_allowed_dimensions()
	{

		if (function_exists('getimagesize'))
		{
			$D = @getimagesize($this->file['tmp_name']);
			if(!empty($D))
			{
				if ($this->max_width > 0 AND $D['0'] > $this->max_width)
				{
					$this->set_error('st', 'ERROR');
					$this->set_error('message', 'Chiều rộng file không hợp lệ');			
					return FALSE;
				}

				if ($this->max_height > 0 AND $D['1'] > $this->max_height)
				{
					$this->set_error('st', 'ERROR');
					$this->set_error('message', 'Chiều dài file không hợp lệ');				
					return FALSE;
				}
			}
			return TRUE;
		}

		return TRUE;
	}	
	
    public function set_folder() {
        $arr_folder = explode('/', $this->upload_path);
        $fol = '';
        foreach ($arr_folder as $row) {
            if (!empty($row)) {
                $fol.=$row . '/';
                if (!file_exists($fol)) {
                    @mkdir($fol, 0777);
                } else {
					$mod = substr(sprintf('%o', fileperms($fol)), -4);
					if ($mod != 0777) {
						@chmod($fol, 0777);
					}
                }
            }
        }
    }	
	
	public function validate_upload_path()
	{
		$this->set_folder();
		if ( ! @is_dir($this->upload_path))
		{
			$this->set_error('st', 'ERROR');
			$this->set_error('st', 'Lỗi thư mục');
			return FALSE;
		}

		if ( ! is_really_writable($this->upload_path))
		{
			$this->set_error('st', 'ERROR');
			$this->set_error('st', 'Thư mục không được phép upload');
			return FALSE;
		}
		return TRUE;
	}
	
	public function set_error($key, $msg)
	{
		if (is_array($msg))
		{
			foreach ($msg as $val)
			{
				$this->error_msg[$key] = $msg;
			}
		}
		else
		{
			$this->error_msg[$key] = $msg;
	
		}
	}		
	
	public function display_errors()
	{
		return array_to_object($this->error_msg);
	}		
}