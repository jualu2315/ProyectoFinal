import { TestBed } from '@angular/core/testing';

import { PortalcandidatosService } from './portalcandidatos.service';

describe('PortalcandidatosService', () => {
  let service: PortalcandidatosService;

  beforeEach(() => {
    TestBed.configureTestingModule({});
    service = TestBed.inject(PortalcandidatosService);
  });

  it('should be created', () => {
    expect(service).toBeTruthy();
  });
});
